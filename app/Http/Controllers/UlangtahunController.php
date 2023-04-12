<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulangtahun;

class UlangtahunController extends Controller
{
    public function index() 
    {
        return view('ulangtahun', [
            "title" => "Berita",
            "ulangtahun" => Ulangtahun::all()
        ]);
    }

    public function show(Ulangtahun $ulangtahuns)
    {
        return view('ulangtahun', [
            "ulangtahun" => $ulangtahuns
        ]);
    }
}
