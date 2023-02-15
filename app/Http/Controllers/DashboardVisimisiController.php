<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;

class DashboardVisimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.visimisi.index', [
            'visimisi' => Visimisi::all() 
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
     * @param  \App\Models\Visimisi  $visimisi
     * @return \Illuminate\Http\Response
     */
    public function show(Visimisi $visimisi)
    {
        return view('dashboard.visimisi.show', [
            'visimisi' => $visimisi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visimisi  $visimisi
     * @return \Illuminate\Http\Response
     */
    public function edit(Visimisi $visimisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visimisi  $visimisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visimisi $visimisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visimisi  $visimisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visimisi $visimisi)
    {
        //
    }
}
