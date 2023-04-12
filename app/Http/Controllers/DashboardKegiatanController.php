<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kegiatan.index', [
            'kegiatan' => Kegiatan::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kegiatan.create');
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
            'title' => 'required',
            'slug' => 'required',
            'desc' => 'required|max:50',
            'speaker' => 'required',
            'month' => 'required',
            'date' => 'required',
            'time' => 'required',
            'image' => 'required|image|file|max:1024'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Kegiatan::create($validatedData);

        return redirect('dashboard/kegiatan')->with('success', 'Berhasil Menambahkan Kegiatan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        return view('dashboard.kegiatan.show', [
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('dashboard.kegiatan.edit', [
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $rules = [
            'title' => 'required',
            'slug' => 'required',
            'desc' => 'required|max:50',
            'speaker' => 'required',
            'month' => 'required',
            'date' => 'required',
            'time' => 'required',
            'image' => 'required|image|file|max:1024'
        ];

        // if($request->theme != $ibadahraya->theme) {
        //     $rules['ibadahraya'] = 'required|unique:ibadahraya';
        // }

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Kegiatan::where('id', $kegiatan->id)
            ->update($validatedData);   

        return redirect('/dashboard/kegiatan')->with('success', 'Berhasil Mengubah Kegiatan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        if($kegiatan->image) {
            Storage::delete($kegiatan->image);
        }
        Kegiatan::destroy($kegiatan->id);
        return redirect('dashboard/kegiatan')->with('success', 'Berhasil Menghapus Kegiatan!');
    }
}
