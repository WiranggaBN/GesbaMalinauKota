<?php

namespace App\Http\Controllers;

use App\Models\Penghiburan;
use Illuminate\Http\Request;

class DashboardPenghiburancetakController extends Controller
{
    public function cetak()
    {
        return view('dashboard.penghiburan.cetak', [
            'penghiburan' => Penghiburan::all() 
        ]);
    }
}
