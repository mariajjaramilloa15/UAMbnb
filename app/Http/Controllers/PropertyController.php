<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PropertyCreateRequest;


class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();
        $data = array(
            ["lat" => 4.60971,"long" => -74.08175],
            ["lat" => 3.43722,"long" => -76.5225],
            ["lat" => 6.25184,"long" => -75.56359],
            ["lat" => 10.96854, "long" => -74.78132],
            ["lat" => 10.39972, "long" => -75.51444 ],
            ["lat" => 7.89391, "long" => -72.50782],
            ["lat" => 7.12539, "long" => -73.1198],
            ["lat" => 4.81333,  "long" => -75.69611],
            ["lat" => 11.24079, "long" => -74.19904],
            ["lat" => 4.43889,  "long" => -75.23222],
            ["lat" => 6.33732, "long" => -75.55795],
            ["lat" => 1.21361,  "long" => -77.28111],
            ["lat" => 5.06889,"long" =>  -75.51738]
          );

        $title = 'Listado Inmuebles';
        $city = $request['city'];
        $start_date = $request['start_date'];
        $final_date = $request['start_date'];


        if($city){
            $properties = DB::table('properties')->where('city', $city)->get();
            /* dd($properties); */
        }

        $array = [];
        $array2 = [];
        $reports = [];

        if($start_date != null && $final_date != null){
            $comprobacion=0;
            foreach ($bills as $bill) {
                $comprobacion=1;
                $fechaI = $bill->start_date;
                $fechaF = $bill->final_date;

                if ((($start_date >= $fechaI) && ($start_date <= $fechaF))) {
                    $comprobacion = 0;
                }else if(($final_date >= $fechaI && $final_date <= $fechaF)){
                    $comprobacion = 0;
                }else if((($start_date <= $fechaI && $start_date <= $fechaF) && ($final_date >= $fechaI && $final_date >= $fechaF))){
                    $comprobacion = 0;
                }


                if($comprobacion == 1){
                    $array[] = $bill->report_id;
                }
            }

            for ($i=0; $i < count($array); $i++) {
                $reports[] = DB::table('reports')->where('id', $array[$i])->get();
            }

            foreach ($reports as $rep) {
                /* dd($rep, $reports); */
                foreach ($rep as $re){
                    $properties[] = DB::table('properties')->where('id', $re->property_id)->get();
                }
                /* dd($reports, $rep, $re, $properties); */
            }
        }

        $imagenFoto = DB::table('images')->get();

        return view('properties.index', compact('title', 'properties', 'imagenFoto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $properties = Property::where('user_id', Auth::id())
            ->get();

        return view('properties.create', compact('properties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyCreateRequest $request)
    {

        $property = new Property();
        $property->fill($request->input());
        $property->user_id = Auth::id();
        $property->save();

        if($request->hasFile('imagenes')){
            $files=$request->imagenes;
            foreach ($files as $file) {
                $image = new Image();
                $imageName=time().'_'.$file->getClientOriginalName();
                $request['property_id']=$property->id;
                $request['file']=$imageName;
                $file->move(\public_path("/images"),$imageName);
                $image->fill($request->input());
                $image->property_id = $property->id;
                $image->file = $request['file'];
                $image->save();
            }
        }

        return redirect(route('properties.index'));

        //dd ($request->input('content'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        return view('properties.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(PropertyCreateRequest $request, Property $property)
    {
            $property->fill($request->input());
            $property->save();

            return redirect(route('user.properties', $property->user_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        if($property->user_id == Auth::id()){
            $property->delete();

            return redirect(route('properties.index', $property->user_id));
        }else{
            return "No puedes eliminar este Inmueble. ";
        }

    }

}