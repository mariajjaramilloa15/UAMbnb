<?php

namespace App\Http\Controllers;

use App\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("owners.index", ["owner" => Owner::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("owners.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        (new Owner($request->input()))->saveOrFail();
        return redirect()->route("owners.index")->with("mensaje", "Propietario agregado");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Owner $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Owner $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $owner)
    {
        return view("owners.edit", ["owner" => $owner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Owner $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $owner)
    {
        $owner->fill($request->input());
        $owner->saveOrFail();
        return redirect()->route("owners.index")->with("mensaje", "Propietario actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Owner $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $owner)
    {
        $owner->delete();
        return redirect()->route("owners.index")->with("mensaje", "Propietario eliminado");
    }
}
