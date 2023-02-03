<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('home');
});

Route::get('/sejarah', function() {
    return view('sejarah');
});

Route::get('/visimisi', function() {
    return view('visimisi');
});

Route::get('/pendeta', function() {
    return view('pendeta');
});

Route::get('/ibadahraya', function() {
    return view('ibadahraya');
});

Route::get('/ibadahpemuda', function() {
    return view('ibadahpemuda');
});

Route::get('/ibadahsm', function() {
    return view('ibadahsm');
});

Route::get('/ibadahrt', function() {
    return view('ibadahrt');
});

Route::get('/ibadahpersekutuan', function() {
    return view('ibadahpersekutuan');
});

Route::get('/doadanpuasa', function() {
    return view('doadanpuasa');
});

Route::get('/jadwaldoadanpuasa', function() {
    return view('jadwaldoadanpuasa');
});

Route::get('/kabarpengantenkristus', function() {
    return view('kabarpengantenkristus');
});

Route::get('/khotbah', function() {
    return view('khotbah');
});

Route::get('/doasemalaman', function() {
    return view('doasemalaman');
});

Route::get('/kunjungandoa', function() {
    return view('kunjungandoa');
});

Route::get('/pencariandana', function() {
    return view('pencariandana');
});

Route::get('/pemberkatannikah', function() {
    return view('pemberkatannikah');
});

Route::get('/penyerahananak', function() {
    return view('penyerahananak');
});

Route::get('/baptisan', function() {
    return view('baptisan');
});

Route::get('/penghiburan', function() {
    return view('penghiburan');
});

Route::get('/doaucapansyukur', function() {
    return view('doaucapansyukur');
});

Route::get('/persembahan', function() {
    return view('persembahan');
});