<?php

namespace App\Http\Controllers;

use App\Models\Baptisan;
use Illuminate\Http\Request;

class DashboardBaptisanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.baptisan.index', [
            'baptisan' => Baptisan::all() 
        ]);
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
     * @param  \App\Models\Baptisan  $baptisan
     * @return \Illuminate\Http\Response
     */
    public function show(Baptisan $baptisan)
    {
        return view('dashboard.baptisan.show', [
            'baptisan' => $baptisan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Baptisan  $baptisan
     * @return \Illuminate\Http\Response
     */
    public function edit(Baptisan $baptisan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Baptisan  $baptisan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Baptisan $baptisan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Baptisan  $baptisan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Baptisan $baptisan)
    {
        //
    }
}
