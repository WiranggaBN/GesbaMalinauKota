<?php

namespace App\Http\Controllers;

use App\Models\Datajemaat;
use Illuminate\Http\Request;

class DashboardDatajemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.datajemaat.index', [
            'datajemaat' => Datajemaat::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.datajemaat.create');
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
            'jumlahlaki' => 'required',
            'jumlahperempuan' => 'required',
            'jumlahdewasa' => 'required|max:255',
            'jumlahpemuda' => 'required',
            'jumlahsekolahminggu' => 'required',
            'jumlahbalita' => 'required',
            'jumlahlansia' => 'required',
            'jumlahkepalakeluarga' => 'required',
            'jumlahjemaat' => 'required'
        ]);

        Datajemaat::create($validatedData);

        return redirect('dashboard/datajemaat')->with('success', 'Berhasil Menambahkan Data Jemaat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datajemaat  $datajemaat
     * @return \Illuminate\Http\Response
     */
    public function show(Datajemaat $datajemaat)
    {
        return view('dashboard.datajemaat.show', [
            'datajemaat' => $datajemaat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datajemaat  $datajemaat
     * @return \Illuminate\Http\Response
     */
    public function edit(Datajemaat $datajemaat)
    {
        return view('dashboard.datajemaat.edit', [
            'datajemaat' => $datajemaat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datajemaat  $datajemaat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datajemaat $datajemaat)
    {
        $rules = [
            'jumlahlaki' => 'required',
            'jumlahperempuan' => 'required',
            'jumlahdewasa' => 'required|max:255',
            'jumlahpemuda' => 'required',
            'jumlahsekolahminggu' => 'required',
            'jumlahbalita' => 'required',
            'jumlahlansia' => 'required',
            'jumlahkepalakeluarga' => 'required',
            'jumlahjemaat' => 'required'
        ];

        // if($request->theme != $ibadahraya->theme) {
        //     $rules['ibadahraya'] = 'required|unique:ibadahraya';
        // }

        $validatedData = $request->validate($rules);

        Datajemaat::where('id', $datajemaat->id)
            ->update($validatedData);   

        return redirect('/dashboard/datajemaat')->with('success', 'Berhasil Mengubah Data Jemaat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datajemaat  $datajemaat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datajemaat $datajemaat)
    {
        Datajemaat::destroy($datajemaat->id);
        return redirect('dashboard/datajemaat')->with('success', 'Berhasil Menghapus Data Jemaat!');
    }
}
