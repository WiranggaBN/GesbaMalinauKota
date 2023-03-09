<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemberkatannikah;

class PemberkatannikahController extends Controller
{
    public function index()
    {
        return view('halpemberkatannikah', [
            "title" => "Kami Peduli",
        ]);
    }

    public function store(Request $request) 
    {
        // return request()->all();
    
        $validatedData = $request->validate([
            'grooms_name' => 'required|max:255',
            'brides_name' => 'required|max:255',
            'status_grooms' => 'required',
            'status_brides' => 'required',
            'date_wedding' => 'required|date_format:"Y-m-d"',
            'phone_grooms' => 'required|min:8|max:14|regex:/^([0-9\s\-\+\(\)]*)$/',
            'phone_brides' => 'required|min:8|max:14|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email_grooms' => 'required|email:dns',
            'email_brides' => 'required|email:dns',
            'address_grooms' => 'required|min:3|max:255',
            'address_brides' => 'required|min:3|max:255'
        ]);       

        // $validatedData['password'] = bcrypt($validatedData['password']);
        // $validatedData['password'] = Hash::make($validatedData['password']);

        Pemberkatannikah::create($validatedData);

        // session()->flash('success', 'Berhasil mendaftar! Silahkan login');

        return redirect('/halpemberkatannikah')->with('success', 'Berhasil!!');
    }
}
