<?php

namespace App\Http\Controllers;

use App\Models\Ulangtahun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardUlangtahunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.ulangtahun.index', [
            'ulangtahun' => Ulangtahun::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ulangtahun.create');
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
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required|image|file|max:1024',
            'datetime' => 'required',
            'biblechapter' => 'required|max:50',
            'bibleverses' => 'required|max:250'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Ulangtahun::create($validatedData);

        return redirect('dashboard/ulangtahun')->with('success', 'Berhasil Menambahkan Ulang Tahun!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ulangtahun  $ulangtahun
     * @return \Illuminate\Http\Response
     */
    public function show(Ulangtahun $ulangtahun)
    {
        return view('dashboard.ulangtahun.show', [
            'ulangtahun' => $ulangtahun
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ulangtahun  $ulangtahun
     * @return \Illuminate\Http\Response
     */
    public function edit(Ulangtahun $ulangtahun)
    {
        return view('dashboard.ulangtahun.edit', [
            'ulangtahun' => $ulangtahun
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ulangtahun  $ulangtahun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ulangtahun $ulangtahun)
    {
        $rules = [
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required|image|file|max:1024',
            'datetime' => 'required',
            'biblechapter' => 'required|max:50',
            'bibleverses' => 'required|max:250'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Ulangtahun::where('id', $ulangtahun->id)
            ->update($validatedData);   

        return redirect('/dashboard/ulangtahun')->with('success', 'Berhasil Mengubah Ulang Tahun!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ulangtahun  $ulangtahun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ulangtahun $ulangtahun)
    {
        if($ulangtahun->image) {
            Storage::delete($ulangtahun->image);
        }
        Ulangtahun::destroy($ulangtahun->id);
        return redirect('dashboard/ulangtahun')->with('success', 'Berhasil Menghapus Ulang Tahun!');
    }
}
