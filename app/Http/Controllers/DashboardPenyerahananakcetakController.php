<?php

namespace App\Http\Controllers;

use App\Models\Penyerahananak;
use Illuminate\Http\Request;

class DashboardPenyerahananakcetakController extends Controller
{
    public function cetak()
    {
        return view('dashboard.penyerahananak.cetak', [
            'penyerahananak' => Penyerahananak::all() 
        ]);
    }
}
