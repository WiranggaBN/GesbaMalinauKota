<?php

namespace App\Http\Controllers;

use App\Models\Penyerahananak;
use Illuminate\Http\Request;

class DashboardPenyerahananakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.penyerahananak.index', [
            'penyerahananak' => Penyerahananak::all() 
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
     * @param  \App\Models\Penyerahananak  $penyerahananak
     * @return \Illuminate\Http\Response
     */
    public function show(Penyerahananak $penyerahananak)
    {
        return view('dashboard.penyerahananak.show', [
            'penyerahananak' => $penyerahananak
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penyerahananak  $penyerahananak
     * @return \Illuminate\Http\Response
     */
    public function edit(Penyerahananak $penyerahananak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penyerahananak  $penyerahananak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penyerahananak $penyerahananak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penyerahananak  $penyerahananak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penyerahananak $penyerahananak)
    {
        //
    }
}
