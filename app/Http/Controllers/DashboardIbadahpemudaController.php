<?php

namespace App\Http\Controllers;

use App\Models\Ibadahpemuda;
use Illuminate\Http\Request;

class DashboardIbadahpemudaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.ibadahpemuda.index', [
            'ibadahpemuda' => Ibadahpemuda::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ibadahpemuda.create');
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

        Ibadahpemuda::create($validatedData);

        return redirect('dashboard/ibadahpemuda')->with('success', 'Berhasil Menambahkan Ibadah Pemuda!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ibadahpemuda  $ibadahpemuda
     * @return \Illuminate\Http\Response
     */
    public function show(Ibadahpemuda $ibadahpemuda)
    {
        return view('dashboard.ibadahpemuda.show', [
            'ibadahpemuda' => $ibadahpemuda
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ibadahpemuda  $ibadahpemuda
     * @return \Illuminate\Http\Response
     */
    public function edit(Ibadahpemuda $ibadahpemuda)
    {
        return view('dashboard.ibadahpemuda.edit', [
            'ibadahpemuda' => $ibadahpemuda
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ibadahpemuda  $ibadahpemuda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ibadahpemuda $ibadahpemuda)
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

        Ibadahpemuda::where('id', $ibadahpemuda->id)
            ->update($validatedData);   

        return redirect('/dashboard/ibadahpemuda')->with('success', 'Berhasil Mengubah Ibadah Pemuda!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ibadahpemuda  $ibadahpemuda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ibadahpemuda $ibadahpemuda)
    {
        Ibadahpemuda::destroy($ibadahpemuda->id);
        return redirect('dashboard/ibadahpemuda')->with('success', 'Berhasil Menghapus Ibadah Pemuda!');
    }
}
