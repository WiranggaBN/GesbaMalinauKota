<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baptisan;

class DashboardBaptisancetakController extends Controller
{
    public function cetak()
    {
        return view('dashboard.baptisan.cetak', [
            'baptisan' => Baptisan::all() 
        ]);
    }
}
