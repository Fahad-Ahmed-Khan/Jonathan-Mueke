<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendazController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		return view('agenda');
    }
	
	public function water()
    {
        //
		return view('agendas.lack-of-water');
    }
	
	public function unemployment()
    {
        //
		return view('agendas.unemployment');
    }
	
	public function hunger()
    {
        //
		return view('agendas.hunger');
    }
	
	public function healthcare()
    {
        //
		return view('agendas.healthcare');
    }
	
	public function infrastructure()
    {
        //
		return view('agendas.infrastructure');
    }
	
	public function stats()
    {
        //
		return view('agendas.statistical-data');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
