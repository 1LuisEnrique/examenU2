<?php

namespace App\Http\Controllers;

use App\Nacionalidades;
use Illuminate\Http\Request;

class NacionalidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nacionalidades=Nacionalidades::all();
        return view("nacionalidades.indexnacionalidades",compact('Nacionalidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nacionalidades  $nacionalidades
     * @return \Illuminate\Http\Response
     */
    public function show(Nacionalidades $nacionalidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nacionalidades  $nacionalidades
     * @return \Illuminate\Http\Response
     */
    public function edit(Nacionalidades $nacionalidades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nacionalidades  $nacionalidades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nacionalidades $nacionalidades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nacionalidades  $nacionalidades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nacionalidades $nacionalidades)
    {
        //
    }
}
