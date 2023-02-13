<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gembalasidang;
use App\Http\Controllers\Controller;

class GembalasidangController extends Controller
{
    public function index() 
    {
        return view('gembalasidang', [
            "gembalasidang" => Gembalasidang::all()
        ]);
    }

    public function show(Gembalasidang $gembalasidangs)
    {
        return view('gembalasidang', [
            "gembalasidang" => $gembalasidangs
        ]);
    }
}
