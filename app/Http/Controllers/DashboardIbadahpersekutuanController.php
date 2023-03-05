<?php

namespace App\Http\Controllers;

use App\Models\Ibadahpersekutuan;
use Illuminate\Http\Request;

class DashboardIbadahpersekutuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.ibadahpersekutuan.index', [
            'ibadahpersekutuan' => Ibadahpersekutuan::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ibadahpersekutuan.create');
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

        Ibadahpersekutuan::create($validatedData);

        return redirect('dashboard/ibadahpersekutuan')->with('success', 'Berhasil Menambahkan Ibadah Persekutuan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ibadahpersekutuan  $ibadahpersekutuan
     * @return \Illuminate\Http\Response
     */
    public function show(Ibadahpersekutuan $ibadahpersekutuan)
    {
        return view('dashboard.ibadahpersekutuan.show', [
            'ibadahpersekutuan' => $ibadahpersekutuan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ibadahpersekutuan  $ibadahpersekutuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Ibadahpersekutuan $ibadahpersekutuan)
    {
        return view('dashboard.ibadahpersekutuan.edit', [
            'ibadahpersekutuan' => $ibadahpersekutuan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ibadahpersekutuan  $ibadahpersekutuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ibadahpersekutuan $ibadahpersekutuan)
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

        Ibadahpersekutuan::where('id', $ibadahpersekutuan->id)
            ->update($validatedData);   

        return redirect('/dashboard/ibadahpersekutuan')->with('success', 'Berhasil Mengubah Ibadah Persekutuan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ibadahpersekutuan  $ibadahpersekutuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ibadahpersekutuan $ibadahpersekutuan)
    {
        Ibadahpersekutuan::destroy($ibadahpersekutuan->id);
        return redirect('dashboard/ibadahpersekutuan')->with('success', 'Berhasil Menghapus Ibadah Persekutuan!');
    }
}
