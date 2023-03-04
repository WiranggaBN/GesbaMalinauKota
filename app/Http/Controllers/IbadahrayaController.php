<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ibadahraya;

class IbadahrayaController extends Controller
{
    public function index() 
    {
        return view('ibadahraya', [
            "title" => "Jadwal Ibadah",
            "ibadahraya" => Ibadahraya::all()
        ]);
    }

    public function show(Ibadahraya $ibadahrayas)
    {
        return view('ibadahraya', [
            "ibadahraya" => $ibadahrayas
        ]);
    }
}
