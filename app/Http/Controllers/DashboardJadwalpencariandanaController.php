<?php

namespace App\Http\Controllers;

use App\Models\Jadwalpencariandana;
use Illuminate\Http\Request;

class DashboardJadwalpencariandanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.jadwalpencariandana.index', [
            'jadwalpencariandana' => Jadwalpencariandana::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jadwalpencariandana.create');
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
            'date' => 'required',
            'time' => 'required',
            'place' => 'required',
            'activity' => 'required',
            'message' => 'required|max:255',
            'address' => 'required'
        ]);

        Jadwalpencariandana::create($validatedData);

        return redirect('dashboard/jadwalpencariandana')->with('success', 'Berhasil Menambahkan Jadwal Pencarian Dana!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwalpencariandana  $jadwalpencariandana
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwalpencariandana $jadwalpencariandana)
    {
        return view('dashboard.jadwalpencariandana.show', [
            'jadwalpencariandana' => $jadwalpencariandana
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwalpencariandana  $jadwalpencariandana
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwalpencariandana $jadwalpencariandana)
    {
        return view('dashboard.jadwalpencariandana.edit', [
            'jadwalpencariandana' => $jadwalpencariandana
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwalpencariandana  $jadwalpencariandana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwalpencariandana $jadwalpencariandana)
    {
        $rules = [
            'date' => 'required',
            'time' => 'required',
            'place' => 'required',
            'activity' => 'required',
            'message' => 'required|max:255',
            'address' => 'required'
        ];

        $validatedData = $request->validate($rules);

        Jadwalpencariandana::where('id', $jadwalpencariandana->id)
            ->update($validatedData);   

        return redirect('/dashboard/jadwalpencariandana')->with('success', 'Berhasil Mengubah Jadwal Pencarian Dana!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwalpencariandana  $jadwalpencariandana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwalpencariandana $jadwalpencariandana)
    {
        Jadwalpencariandana::destroy($jadwalpencariandana->id);
        return redirect('dashboard/jadwalpencariandana')->with('success', 'Berhasil Menghapus Jadwal Pencarian Dana!');
    }
}
