<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hubungikami;

class HubungikamiController extends Controller
{
    public function index()
    {
        return view('hubungikami', [
            "title" => "Hubungi Kami",
        ]);
    }

    // public function show(Hubungikami $hubungikamis)
    // {
    //     return view('hubungikami', [
    //         "hubungikami" => $hubungikamis
    //     ]);
    // }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'alamat' => 'required|min:3|max:255',
            'telp' => 'required|min:8|max:14|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email' => 'required|email:dns|unique:users',
            'pesan' => 'required|min:8|max:255'
        ]);       

        // $validatedData['password'] = bcrypt($validatedData['password']);
        // $validatedData['password'] = Hash::make($validatedData['password']);

        Hubungikami::create($validatedData);

        // session()->flash('success', 'Berhasil mendaftar! Silahkan login');

        return redirect('/hubungikami')->with('success', 'Berhasil!!');
    }
}
