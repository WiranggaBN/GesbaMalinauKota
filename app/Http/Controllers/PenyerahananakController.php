<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyerahananak;

class PenyerahananakController extends Controller
{
    public function index()
    {
        return view('halpenyerahananak', [
            "title" => "Kami Peduli",
        ]);
    }

    public function store(Request $request) 
    {
        // return request()->all();
    
        $validatedData = $request->validate([
            'fullname' => 'required|max:255',
            'fathername' => 'required|max:255',
            'gender' => 'required','in:male,female',
            'mothername' => 'required|max:255',
            'place_of_birth' => 'required|max:255',
            'birth_day' => 'required|date_format:"Y-m-d"',
            'phone' => 'required|min:8|max:14|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email' => 'required|email:dns|unique:users',
            'address' => 'required|min:3|max:255'
        ]);       

        // $validatedData['password'] = bcrypt($validatedData['password']);
        // $validatedData['password'] = Hash::make($validatedData['password']);

        Penyerahananak::create($validatedData);

        // session()->flash('success', 'Berhasil mendaftar! Silahkan login');

        return redirect('/halpenyerahananak')->with('success', 'Berhasil!!');
    }
}
