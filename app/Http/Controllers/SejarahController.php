<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sejarah;

class SejarahController extends Controller
{
    public function index() 
    {
        // return view('sejarah', [
        //     "sejarah" => Sejarah::with(['author'])->latest()->get()
        // ]);

        return view('sejarah', [
            "title" => "Profil",
            "sejarah" => Sejarah::all()
        ]);
    }

    public function show(Sejarah $sejarahs)
    {
        return view('sejarah', [
            "sejarah" => $sejarahs
        ]);
    }
}
