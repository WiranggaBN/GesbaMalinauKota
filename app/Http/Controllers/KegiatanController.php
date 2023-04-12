<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
    public function index() 
    {
        return view('kegiatan', [
            "title" => "Berita",
            "kegiatan" => Kegiatan::all()
        ]);
    }

    public function show(Kegiatan $kegiatans)
    {
        return view('kegiatan', [
            "kegiatan" => $kegiatans
        ]);
    }
}
