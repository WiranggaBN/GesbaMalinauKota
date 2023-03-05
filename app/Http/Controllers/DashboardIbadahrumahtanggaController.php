<?php

namespace App\Http\Controllers;

use App\Models\Ibadahrumahtangga;
use Illuminate\Http\Request;

class DashboardIbadahrumahtanggaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.ibadahrumahtangga.index', [
            'ibadahrumahtangga' => Ibadahrumahtangga::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ibadahrumahtangga.create');
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

        Ibadahrumahtangga::create($validatedData);

        return redirect('dashboard/ibadahrumahtangga')->with('success', 'Berhasil Menambahkan Ibadah Rumah Tangga!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ibadahrumahtangga  $ibadahrumahtangga
     * @return \Illuminate\Http\Response
     */
    public function show(Ibadahrumahtangga $ibadahrumahtangga)
    {
        return view('dashboard.ibadahrumahtangga.show', [
            'ibadahrumahtangga' => $ibadahrumahtangga
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ibadahrumahtangga  $ibadahrumahtangga
     * @return \Illuminate\Http\Response
     */
    public function edit(Ibadahrumahtangga $ibadahrumahtangga)
    {
        return view('dashboard.ibadahrumahtangga.edit', [
            'ibadahrumahtangga' => $ibadahrumahtangga
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ibadahrumahtangga  $ibadahrumahtangga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ibadahrumahtangga $ibadahrumahtangga)
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

        Ibadahrumahtangga::where('id', $ibadahrumahtangga->id)
            ->update($validatedData);   

        return redirect('/dashboard/ibadahrumahtangga')->with('success', 'Berhasil Mengubah Ibadah Rumah Tangga!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ibadahrumahtangga  $ibadahrumahtangga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ibadahrumahtangga $ibadahrumahtangga)
    {
        Ibadahrumahtangga::destroy($ibadahrumahtangga->id);
        return redirect('dashboard/ibadahrumahtangga')->with('success', 'Berhasil Menghapus Ibadah Rumah Tangga!');  
    }
}
