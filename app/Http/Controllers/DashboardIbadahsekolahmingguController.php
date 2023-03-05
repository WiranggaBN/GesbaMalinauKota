<?php

namespace App\Http\Controllers;

use App\Models\Ibadahsekolahminggu;
use Illuminate\Http\Request;

class DashboardIbadahsekolahmingguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.ibadahsekolahminggu.index', [
            'ibadahsekolahminggu' => Ibadahsekolahminggu::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ibadahsekolahminggu.create');
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

        Ibadahsekolahminggu::create($validatedData);

        return redirect('dashboard/ibadahsekolahminggu')->with('success', 'Berhasil Menambahkan Ibadah Sekolah Minggu!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ibadahsekolahminggu  $ibadahsekolahminggu
     * @return \Illuminate\Http\Response
     */
    public function show(Ibadahsekolahminggu $ibadahsekolahminggu)
    {
        return view('dashboard.ibadahsekolahminggu.show', [
            'ibadahsekolahminggu' => $ibadahsekolahminggu
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ibadahsekolahminggu  $ibadahsekolahminggu
     * @return \Illuminate\Http\Response
     */
    public function edit(Ibadahsekolahminggu $ibadahsekolahminggu)
    {
        return view('dashboard.ibadahsekolahminggu.edit', [
            'ibadahsekolahminggu' => $ibadahsekolahminggu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ibadahsekolahminggu  $ibadahsekolahminggu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ibadahsekolahminggu $ibadahsekolahminggu)
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

        Ibadahsekolahminggu::where('id', $ibadahsekolahminggu->id)
            ->update($validatedData);   

        return redirect('/dashboard/ibadahsekolahminggu')->with('success', 'Berhasil Mengubah Ibadah Sekolah Minggu!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ibadahsekolahminggu  $ibadahsekolahminggu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ibadahsekolahminggu $ibadahsekolahminggu)
    {
        Ibadahsekolahminggu::destroy($ibadahsekolahminggu->id);
        return redirect('dashboard/ibadahsekolahminggu')->with('success', 'Berhasil Menghapus Ibadah Sekolah Minggu!');
    }
}
