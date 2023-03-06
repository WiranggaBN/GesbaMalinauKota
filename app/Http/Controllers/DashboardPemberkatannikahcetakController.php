<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemberkatannikah;

class DashboardPemberkatannikahcetakController extends Controller
{
    public function cetak()
    {
        return view('dashboard.pemberkatannikah.cetak', [
            'pemberkatannikah' => Pemberkatannikah::all() 
        ]);
    }
}
