<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
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
        return view('properties.index', compact('properties', 'data'));
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