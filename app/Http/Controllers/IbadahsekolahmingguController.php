<?php

namespace App\Http\Controllers;

use App\Models\Ibadahsekolahminggu;
use Illuminate\Http\Request;

class IbadahsekolahmingguController extends Controller
{
    public function index() 
    {
        return view('ibadahsekolahminggu', [
            "title" => "Jadwal Ibadah",
            "ibadahsekolahminggu" => Ibadahsekolahminggu::all()
        ]);
    }

    public function show(Ibadahsekolahminggu $ibadahsekolahminggus)
    {
        return view('ibadahsekolahminggu', [
            "ibadahsekolahminggu" => $ibadahsekolahminggus
        ]);
    }
}
