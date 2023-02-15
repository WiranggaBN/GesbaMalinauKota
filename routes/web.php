<?php


use App\Models\Sejarah;
use App\Models\User;
use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\GembalasidangController;
use App\Http\Controllers\DashboardSejarahController;
use App\Http\Controllers\DashboardVisimisiController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Frontend Route

Route::get('/', function() {
    return view('home');
});

Route::get('/sejarah', [SejarahController::class, 'index']);
Route::get('/sejarah/{sejarahs:slug}', [SejarahController::class, 'show']);

Route::get('/visimisi', [VisimisiController::class, 'index']);
Route::get('/visimisi/{visimisis:title}', [VisimisiController::class, 'show']);

Route::get('/gembalasidang', [GembalasidangController::class, 'index']);
Route::get('/gembalasidang/{gembalasidang:body}', [GembalasidangController::class, 'show']);

// Route::get('/pendeta', function() {
//     return view('pendeta');
// });

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

Route::get('/jadwaldoasemalaman', function() {
    return view('jadwaldoasemalaman');
});

Route::get('/kunjungandoa', function() {
    return view('kunjungandoa');
});

Route::get('/jadwalkunjungandoa', function() {
    return view('jadwalkunjungandoa');
});

Route::get('/pencariandana', function() {
    return view('pencariandana');
});

Route::get('/jadwalpencariandana', function() {
    return view('jadwalpencariandana');
});

Route::get('/pemberkatannikah', function() {
    return view('pemberkatannikah');
});

Route::get('/penyerahananak', function() {
    return view('penyerahananak');
});

Route::get('/halpenyerahananak', function() {
    return view('halpenyerahananak');
});

Route::get('/baptisan', function() {
    return view('baptisan');
});

Route::get('/penghiburan', function() {
    return view('penghiburan');
});

Route::get('/persembahan', function() {
    return view('persembahan');
});

Route::get('/hubungikami', function() {
    return view('hubungikami');
});

// Backend Route

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/sejarah', DashboardSejarahController::class)-> middleware('auth');

Route::get('/authors/{author:username}', function (User $author) {
    return view('sejarah', [
        'slug' => 'sejarah-gereja',
        'sejarah' => $author->sejarah->load('author'),
    ]);
});

Route::resource('/dashboard/visimisi', DashboardVisimisiController::class)-> middleware('auth');

Route::get('/authors/{author:username}', function (User $author) {
    return view('visimisi', [
        'title' => 'Visi',
        'body' => 'Visi',
        'visimisi' => $author->visimisi->load('author'),
    ]);
});