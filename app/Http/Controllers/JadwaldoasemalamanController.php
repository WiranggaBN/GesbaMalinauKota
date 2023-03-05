<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwaldoasemalaman;

class JadwaldoasemalamanController extends Controller
{
    public function index() 
    {
        return view('jadwaldoasemalaman', [
            "title" => "Layanan",
            "jadwaldoasemalaman" => Jadwaldoasemalaman::all()
        ]);
    }

    public function show(Jadwaldoasemalaman $jadwaldoasemalamans)
    {
        return view('jadwaldoasemalaman', [
            "jadwaldoasemalaman" => $jadwaldoasemalamans
        ]);
    }
}
