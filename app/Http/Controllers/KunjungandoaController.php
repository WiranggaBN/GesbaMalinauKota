<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungandoa;

class KunjungandoaController extends Controller
{
    public function index()
    {
        return view('kunjungandoa', [
            "title" => "Kami Peduli",
        ]);
    }

    public function store(Request $request) 
    {
        // return request()->all();
    
        $validatedData = $request->validate([
            'diminta_oleh' => 'required',
            'fullname' => 'required|max:255', 
            'gender' => 'required',
            'phone' => 'required|min:8|max:14|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email' => 'required|email:dns|unique:users',
            'type_of_service' => 'required',
            'pray_day' => 'required|date_format:"Y-m-d H:i"',
            'detail' => 'required|max:255',
            'message' => 'max:255',
        ]);

        Kunjungandoa::create($validatedData);

        return redirect('/kunjungandoa')->with('success', 'Berhasil!!');
    }
}
