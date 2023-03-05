<?php

namespace App\Http\Controllers;

use App\Models\Jadwaldoadanpuasa;
use Illuminate\Http\Request;

class JadwaldoadanpuasaController extends Controller
{
    public function index() 
    {
        return view('jadwaldoadanpuasa', [
            "title" => "Layanan",
            "jadwaldoadanpuasa" => Jadwaldoadanpuasa::all()
        ]);
    }

    public function show(Jadwaldoadanpuasa $jadwaldoadanpuasas)
    {
        return view('jadwaldoadanpuasa', [
            "jadwaldoadanpuasa" => $jadwaldoadanpuasas
        ]);
    }
}
