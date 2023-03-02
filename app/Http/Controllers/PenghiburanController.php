<?php

namespace App\Http\Controllers;

use App\Models\Penghiburan;
use Illuminate\Http\Request;

class PenghiburanController extends Controller
{
    public function index()
    {
        return view('penghiburan', [
            "title" => "Kami Peduli",
        ]);
    }

    public function store(Request $request) 
    {
        // return request()->all();
    
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'phone' => 'required|min:8|max:14|regex:/^([0-9\s\-\+\(\)]*)$/',
            'who_died' => 'required|max:255',
            // 'gender' => 'required','in:male,female',
            'relationship' => 'required|max:255',
            // 'place_of_birth' => 'required|max:255',
            'date_time' => 'required|date_format:"Y-m-d H:i"',
            // 'phone' => 'required|min:8|max:14|regex:/^([0-9\s\-\+\(\)]*)$/',
            // 'email' => 'required|email:dns|unique:users',
            'location' => 'required|min:3|max:255'
        ]);

        Penghiburan::create($validatedData);

        return redirect('/penghiburan')->with('success', 'Berhasil!!');
    }
}
