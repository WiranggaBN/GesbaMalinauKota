<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ibadahpersekutuan;

class IbadahpersekutuanController extends Controller
{
    public function index() 
    {
        return view('ibadahpersekutuan', [
            "title" => "Jadwal Ibadah",
            "ibadahpersekutuan" => Ibadahpersekutuan::all()
        ]);
    }

    public function show(Ibadahpersekutuan $ibadahpersekutuans)
    {
        return view('ibadahpersekutuan', [
            "ibadahpersekutuan" => $ibadahpersekutuans
        ]);
    }
}
