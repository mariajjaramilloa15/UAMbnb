<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Report;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ReportRequest;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = DB::table('reports')->get();
        /* dd($properties); */

        $title = 'Listado Reportes';

        return view('reports.index', compact('title', 'reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportRequest $request)
    {
        $properties = DB::table('properties')->where('id', $request['property_id'])->get();
        $propertiess = DB::table('properties')->get();
        $bills = DB::table('bills')->get();
        $reportss = DB::table('reports')->get();


        $start_date = $request['start_date'];
        $final_date = $request['final_date'];

        $fechaEmision = Carbon::parse($request->input('start_date'));
        $fechaExpiracion = Carbon::parse($request->input('final_date'));

        $diasDiferencia = $fechaExpiracion->diffInDays($fechaEmision);

        foreach ($properties as $property) {
            $report = new Report();
            $report->fill($request->input());
            $report->nights = $diasDiferencia;
            $report->property_id = $property->id;
            $report->rental_cost = $report->nights*$property->daily_rental_cost;
            if($property->area <= 100){
                $report->cleaning_cost = $report->rental_cost*10/100;
            }else{
                $report->cleaning_cost = $report->rental_cost*15/100;
            }
            $report->service_cost = $report->rental_cost*23/100;
            $report->save();
        }

        $comprobacion = 1;
        foreach ($propertiess as $property) {
            foreach ($bills as $bill) {
                foreach ($reportss as $repo) {
                    if($bill->report_id === $repo->id && $property->id === $repo->property_id){
                        $fechaI = $bill->start_date;
                        $fechaF = $bill->final_date;
                        if ((($start_date >= $fechaI) && ($start_date <= $fechaF))) {
                            $comprobacion = 0;
                        }else if(($final_date >= $fechaI && $final_date <= $fechaF)){
                            $comprobacion = 0;
                        }else if((($start_date <= $fechaI && $start_date <= $fechaF) && ($final_date >= $fechaI && $final_date >= $fechaF))){
                            $comprobacion = 0;
                        }
                    }
                }
            }

            /* else if($start_date === $fechaI){
                $comprobacion = 0;
            } */
            /* dd($comprobacion, $start_date, $fechaI); */
        }
        
        $sumaTotal = $report->rental_cost+$report->cleaning_cost+$report->cleaning_cost;

        return view ('reports.show' , compact('report', 'start_date', 'final_date', 'bills', 'comprobacion', 'sumaTotal'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = Report::find($id);

        /* dd($report);
        $title = 'Listado Usuarios'; */

        return view('reports.show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(ReportRequest $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}