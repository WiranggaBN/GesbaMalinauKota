<?php

namespace App\Http\Controllers;

use App\Models\Jadwaldoasemalaman;
use Illuminate\Http\Request;

class DashboardJadwaldoasemalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.jadwaldoasemalaman.index', [
            'jadwaldoasemalaman' => Jadwaldoasemalaman::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jadwaldoasemalaman.create');
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

        Jadwaldoasemalaman::create($validatedData);

        return redirect('dashboard/jadwaldoasemalaman')->with('success', 'Berhasil Menambahkan Jadwal Doa Semalaman!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwaldoasemalaman  $jadwaldoasemalaman
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwaldoasemalaman $jadwaldoasemalaman)
    {
        return view('dashboard.jadwaldoasemalaman.show', [
            'jadwaldoasemalaman' => $jadwaldoasemalaman
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwaldoasemalaman  $jadwaldoasemalaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwaldoasemalaman $jadwaldoasemalaman)
    {
        return view('dashboard.jadwaldoasemalaman.edit', [
            'jadwaldoasemalaman' => $jadwaldoasemalaman
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwaldoasemalaman  $jadwaldoasemalaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwaldoasemalaman $jadwaldoasemalaman)
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

        Jadwaldoasemalaman::where('id', $jadwaldoasemalaman->id)
            ->update($validatedData);   

        return redirect('/dashboard/jadwaldoasemalaman')->with('success', 'Berhasil Mengubah Jadwal Doa Semalaman!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwaldoasemalaman  $jadwaldoasemalaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwaldoasemalaman $jadwaldoasemalaman)
    {
        Jadwaldoasemalaman::destroy($jadwaldoasemalaman->id);
        return redirect('dashboard/jadwaldoasemalaman')->with('success', 'Berhasil Menghapus Jadwal Doa Semalaman!');
    }
}
