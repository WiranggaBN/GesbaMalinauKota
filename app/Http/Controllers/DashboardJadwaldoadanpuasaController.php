<?php

namespace App\Http\Controllers;

use App\Models\Jadwaldoadanpuasa;
use Illuminate\Http\Request;

class DashboardJadwaldoadanpuasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.jadwaldoadanpuasa.index', [
            'jadwaldoadanpuasa' => Jadwaldoadanpuasa::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jadwaldoadanpuasa.create');
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

        Jadwaldoadanpuasa::create($validatedData);

        return redirect('dashboard/jadwaldoadanpuasa')->with('success', 'Berhasil Menambahkan Jadwal Doa dan Puasa!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwaldoadanpuasa  $jadwaldoadanpuasa
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwaldoadanpuasa $jadwaldoadanpuasa)
    {
        return view('dashboard.jadwaldoadanpuasa.show', [
            'jadwaldoadanpuasa' => $jadwaldoadanpuasa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwaldoadanpuasa  $jadwaldoadanpuasa
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwaldoadanpuasa $jadwaldoadanpuasa)
    {
        return view('dashboard.jadwaldoadanpuasa.edit', [
            'jadwaldoadanpuasa' => $jadwaldoadanpuasa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwaldoadanpuasa  $jadwaldoadanpuasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwaldoadanpuasa $jadwaldoadanpuasa)
    {
        $rules = [
            'speaker' => 'required',
            'theme' => 'required|max:255', 
            'date' => 'required',
            'time' => 'required',
            'place' => 'required',
            'address' => 'required',
        ];

        $validatedData = $request->validate($rules);

        Jadwaldoadanpuasa::where('id', $jadwaldoadanpuasa->id)
            ->update($validatedData);   

        return redirect('/dashboard/jadwaldoadanpuasa')->with('success', 'Berhasil Mengubah Jadwal Doa dan Puasa!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwaldoadanpuasa  $jadwaldoadanpuasa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwaldoadanpuasa $jadwaldoadanpuasa)
    {
        Jadwaldoadanpuasa::destroy($jadwaldoadanpuasa->id);
        return redirect('dashboard/jadwaldoadanpuasa')->with('success', 'Berhasil Menghapus Jadwal Doa dan Puasa!');
    }
}
