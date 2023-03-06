<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungandoa;

class DashboardKunjungandoacetakController extends Controller
{
    public function cetak()
    {
        return view('dashboard.kunjungandoa.cetak', [
            'kunjungandoa' => Kunjungandoa::all() 
        ]);
    }
}
