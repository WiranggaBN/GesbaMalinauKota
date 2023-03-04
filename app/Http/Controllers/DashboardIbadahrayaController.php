<?php

namespace App\Http\Controllers;

use App\Models\Ibadahraya;
use Illuminate\Http\Request;

class DashboardIbadahrayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.ibadahraya.index', [
            'ibadahraya' => Ibadahraya::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ibadahraya.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'speaker' => 'required',
            'theme' => 'required|max:255',
            'date' => 'required',
            'time' => 'required',
            'place' => 'required',
            'address' => 'required'
        ]);

        Ibadahraya::create($validatedData);

        return redirect('dashboard/ibadahraya')->with('success', 'Berhasil Menambahkan Ibadah Raya!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ibadahraya  $ibadahraya
     * @return \Illuminate\Http\Response
     */
    public function show(Ibadahraya $ibadahraya)
    {
        return view('dashboard.ibadahraya.show', [
            'ibadahraya' => $ibadahraya
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ibadahraya  $ibadahraya
     * @return \Illuminate\Http\Response
     */
    public function edit(Ibadahraya $ibadahraya)
    {
        return view('dashboard.ibadahraya.edit', [
            'ibadahraya' => $ibadahraya
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ibadahraya  $ibadahraya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ibadahraya $ibadahraya)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ibadahraya  $ibadahraya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ibadahraya $ibadahraya)
    {
        Ibadahraya::destroy($ibadahraya->id);
        return redirect('dashboard/ibadahraya')->with('success', 'Berhasil Menghapus Ibadah Raya!');
    }
}
