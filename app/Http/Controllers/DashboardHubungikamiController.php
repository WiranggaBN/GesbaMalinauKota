<?php

namespace App\Http\Controllers;

use App\Models\Hubungikami;
use Illuminate\Http\Request;

class DashboardHubungikamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.hubungikami.index', [
            'hubungikami' => Hubungikami::all() 
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
     * @param  \App\Models\Hubungikami  $hubungikami
     * @return \Illuminate\Http\Response
     */
    public function show(Hubungikami $hubungikami)
    {
        return view('dashboard.hubungikami.show', [
            'hubungikami' => $hubungikami
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hubungikami  $hubungikami
     * @return \Illuminate\Http\Response
     */
    public function edit(Hubungikami $hubungikami)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hubungikami  $hubungikami
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hubungikami $hubungikami)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hubungikami  $hubungikami
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hubungikami $hubungikami)
    {
        Hubungikami::destroy($hubungikami->id);
        return redirect('dashboard/hubungikami')->with('success', 'Berhasil Menghapus Hubungi Kami!');
    }
}
