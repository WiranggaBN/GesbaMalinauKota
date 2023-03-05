<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ibadahpemuda;

class IbadahpemudaController extends Controller
{
    public function index() 
    {
        return view('ibadahpemuda', [
            "title" => "Jadwal Ibadah",
            "ibadahpemuda" => Ibadahpemuda::all()
        ]);
    }

    public function show(Ibadahpemuda $ibadahpemudas)
    {
        return view('ibadahpemuda', [
            "ibadahpemuda" => $ibadahpemudas
        ]);
    }
}
