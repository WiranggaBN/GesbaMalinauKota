<?php

namespace App\Http\Controllers;

use App\Models\Penghiburan;
use Illuminate\Http\Request;

class DashboardPenghiburanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.penghiburan.index', [
            'penghiburan' => Penghiburan::all() 
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
     * @param  \App\Models\Penghiburan  $penghiburan
     * @return \Illuminate\Http\Response
     */
    public function show(Penghiburan $penghiburan)
    {
        return view('dashboard.penghiburan.show', [
            'penghiburan' => $penghiburan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penghiburan  $penghiburan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penghiburan $penghiburan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penghiburan  $penghiburan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penghiburan $penghiburan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penghiburan  $penghiburan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penghiburan $penghiburan)
    {
        Penghiburan::destroy($penghiburan->id);
        return redirect('dashboard/penghiburan')->with('success', 'Berhasil Menghapus Penghiburan!');
    }
}
