<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baptisan;

class BaptisanController extends Controller
{
    public function index()
    {
        return view('baptisan', [
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

        Baptisan::create($validatedData);

        return redirect('/baptisan')->with('success', 'Berhasil!!');
    }
}
