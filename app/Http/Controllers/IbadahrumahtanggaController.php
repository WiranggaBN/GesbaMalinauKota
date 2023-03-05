<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ibadahrumahtangga;

class IbadahrumahtanggaController extends Controller
{
    public function index() 
    {
        return view('ibadahrumahtangga', [
            "title" => "Jadwal Ibadah",
            "ibadahrumahtangga" => Ibadahrumahtangga::all()
        ]);
    }

    public function show(Ibadahrumahtangga $ibadahrumahtanggas)
    {
        return view('ibadahrumahtangga', [
            "ibadahrumahtangga" => $ibadahrumahtanggas
        ]);
    }
}
