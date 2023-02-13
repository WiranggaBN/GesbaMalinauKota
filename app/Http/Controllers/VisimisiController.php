<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisimisiController extends Controller
{
    public function index() 
    {
        return view('visimisi', [
            "visimisi" => Visimisi::all()
        ]);
    }

    public function show(Visimisi $visimisis)
    {
        return view('visimisi', [
            "visimisi" => $visimisis
        ]);
    }
}
