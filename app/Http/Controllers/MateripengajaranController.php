<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materipengajaran;

class MateripengajaranController extends Controller
{
    public function index() {
        return view('materipengajarann', [
            "title" => "Info Rohani",
            "materipengajarann" => Materipengajaran::all()
        ]);
    } 

    public function show(Materipengajaran $materipengajaran) {
        return view('materipengajarann', [
            "title" => "Materi Pengajaran",
            "materipengajarann" => $materipengajaran
        ]);
    } 
}
