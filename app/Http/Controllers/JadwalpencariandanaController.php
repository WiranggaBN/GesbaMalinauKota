<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwalpencariandana;

class JadwalpencariandanaController extends Controller
{
    public function index() 
    {
        return view('jadwalpencariandana', [
            "title" => "Layanan",
            "jadwalpencariandana" => Jadwalpencariandana::all()
        ]);
    }

    public function show(Jadwalpencariandana $jadwalpencariandanas)
    {
        return view('jadwalpencariandana', [
            "jadwalpencariandana" => $jadwalpencariandanas
        ]);
    }
}
