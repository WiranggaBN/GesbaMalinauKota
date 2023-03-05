<?php

namespace App\Http\Controllers;

use App\Models\Kunjungandoa;
use Illuminate\Http\Request;

class DashboardKunjungandoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kunjungandoa.index', [
            'kunjungandoa' => Kunjungandoa::all() 
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
     * @param  \App\Models\Kunjungandoa  $kunjungandoa
     * @return \Illuminate\Http\Response
     */
    public function show(Kunjungandoa $kunjungandoa)
    {
        return view('dashboard.kunjungandoa.show', [
            'kunjungandoa' => $kunjungandoa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kunjungandoa  $kunjungandoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Kunjungandoa $kunjungandoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kunjungandoa  $kunjungandoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kunjungandoa $kunjungandoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kunjungandoa  $kunjungandoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kunjungandoa $kunjungandoa)
    {
        Kunjungandoa::destroy($kunjungandoa->id);
        return redirect('dashboard/kunjungandoa')->with('success', 'Berhasil Menghapus Kunjungan Doa!');
    }
}
