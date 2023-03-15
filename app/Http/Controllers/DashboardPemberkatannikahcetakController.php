<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemberkatannikah;
use Illuminate\Support\Carbon;

class DashboardPemberkatannikahcetakController extends Controller
{
    public function cetak()
    {
        return view('dashboard.pemberkatannikah.cetak', [
            'pemberkatannikah' => Pemberkatannikah::all() 
        ]);
    }

    // public function getCreatedAtAttribute()
    // {
    //     return Carbon::parse($this->attributes['created_at'])
    //     ->translatedFormat('l, d F Y');
    // }
}
