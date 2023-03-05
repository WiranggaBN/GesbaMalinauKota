<?php

namespace App\Http\Controllers;

use App\Models\Pemberkatannikah;
use Illuminate\Http\Request;

class DashboardPemberkatannikahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pemberkatannikah.index', [
            'pemberkatannikah' => Pemberkatannikah::all() 
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
     * @param  \App\Models\Pemberkatannikah  $pemberkatannikah
     * @return \Illuminate\Http\Response
     */
    public function show(Pemberkatannikah $pemberkatannikah)
    {
        return view('dashboard.pemberkatannikah.show', [
            'pemberkatannikah' => $pemberkatannikah
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemberkatannikah  $pemberkatannikah
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemberkatannikah $pemberkatannikah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemberkatannikah  $pemberkatannikah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemberkatannikah $pemberkatannikah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemberkatannikah  $pemberkatannikah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemberkatannikah $pemberkatannikah)
    {
        Pemberkatannikah::destroy($pemberkatannikah->id);
        return redirect('dashboard/pemberkatannikah')->with('success', 'Berhasil Menghapus Pemberkatan Nikah!');
    }
}
