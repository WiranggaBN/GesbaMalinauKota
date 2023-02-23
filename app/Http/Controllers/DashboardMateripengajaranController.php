<?php

namespace App\Http\Controllers;

use App\Models\Materipengajaran;
use Illuminate\Http\Request;

class DashboardMateripengajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.materipengajarann.index', [
            'materipengajaran' => Materipengajaran::all() 
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
     * @param  \App\Models\Materipengajaran  $materipengajaran
     * @return \Illuminate\Http\Response
     */
    public function show(Materipengajaran $materipengajaran)
    {
        return view('dashboard.materipengajarann.show', [
            'materipengajarann' => $materipengajaran
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materipengajaran  $materipengajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Materipengajaran $materipengajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materipengajaran  $materipengajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materipengajaran $materipengajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materipengajaran  $materipengajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materipengajaran $materipengajaran)
    {
        //
    }
}
