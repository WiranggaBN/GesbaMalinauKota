<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datajemaat;

class DatajemaatController extends Controller
{
    public function index() 
    {
        return view('datajemaat', [
            "title" => "Profil",
            "datajemaat" => Datajemaat::all()
        ]);
    }

    public function show(Datajemaat $datajemaats)
    {
        return view('datajemaat', [
            "datajemaat" => $datajemaats
        ]);
    }
}
