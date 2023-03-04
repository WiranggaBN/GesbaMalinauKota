<?php


use App\Models\Post;
use App\Models\User;
use App\Models\Sejarah;
use App\Http\Controllers\Home;
use App\Models\Materipengajaran;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\BaptisanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\IbadahrayaController;
use App\Http\Controllers\HubungikamiController;
use App\Http\Controllers\PenghiburanController;
use App\Http\Controllers\KunjungandoaController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\GembalasidangController;
use App\Http\Controllers\PenyerahananakController;
use App\Http\Controllers\DashboardSejarahController;
use App\Http\Controllers\MateripengajaranController;
use App\Http\Controllers\PemberkatannikahController;
use App\Http\Controllers\DashboardBaptisanController;
use App\Http\Controllers\DashboardVisimisiController;
use App\Http\Controllers\DashboardIbadahrayaController;
use App\Http\Controllers\DashboardHubungikamiController;
use App\Http\Controllers\DashboardPenghiburanController;
use App\Http\Controllers\DashboardKunjungandoaController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardGembalasidangController;
use App\Http\Controllers\DashboardPenyerahananakController;
use App\Http\Controllers\DashboardMateripengajaranController;
use App\Http\Controllers\DashboardPemberkatannikahController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/sejarah', [SejarahController::class, 'index']);
Route::get('/sejarah/{sejarahs:slug}', [SejarahController::class, 'show']);

Route::get('/visimisi', [VisimisiController::class, 'index']);
Route::get('/visimisi/{visimisis:title}', [VisimisiController::class, 'show']);

Route::get('/gembalasidang', [GembalasidangController::class, 'index']);
Route::get('/gembalasidang/{gembalasidang:body}', [GembalasidangController::class, 'show']);

Route::get('/ibadahraya', [IbadahrayaController::class, 'index']);
Route::get('/ibadahraya/{ibadahraya:theme}', [IbadahrayaController::class, 'show']);

Route::get('/ibadahpemuda', function() {
    return view('ibadahpemuda', [
        "title" => "Jadwal Ibadah"
    ]);
});

Route::get('/ibadahsm', function() {
    return view('ibadahsm', [
        "title" => "Jadwal Ibadah"
    ]);
});

Route::get('/ibadahrt', function() {
    return view('ibadahrt', [
        "title" => "Jadwal Ibadah"
    ]);
});

Route::get('/ibadahpersekutuan', function() {
    return view('ibadahpersekutuan', [
        "title" => "Jadwal Ibadah"
    ]);
});

Route::get('/doadanpuasa', function() {
    return view('doadanpuasa', [
        "title" => "Layanan"
    ]);
});

Route::get('/jadwaldoadanpuasa', function() {
    return view('jadwaldoadanpuasa', [
        "title" => "Layanan"
    ]);
});

// KPK
// Route::get('/materipengajarann', [MateripengajaranController::class, 'index']);
// Route::get('/materipengajarann/{materipengajaran:slug}', [MateripengajaranController::class, 'show']);



Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// KPK

Route::get('/materipengajarann', function() {
    return view('materipengajarann', [
        "title" => "Info Rohani"
    ]);
});

Route::get('dari-timur', function() {
    return view('dari-timur', [
        "title" => "Info Rohani"
    ]);
});

Route::get('tabernakel-iii', function() {
    return view('tabernakel-iii', [
        "title" => "Info Rohani"
    ]);
});

Route::get('tabernakel-ii', function() {
    return view('tabernakel-ii', [
        "title" => "Info Rohani"
    ]);
});

Route::get('tabernakel-i', function() {
    return view('tabernakel-i', [
        "title" => "Info Rohani"
    ]);
});

Route::get('/doasemalaman', function() {
    return view('doasemalaman', [
        "title" => "Layanan"
    ]);
});

Route::get('/jadwaldoasemalaman', function() {
    return view('jadwaldoasemalaman', [
        "title" => "Layanan"
    ]);
});

Route::get('/pencariandana', function() {
    return view('pencariandana', [
        "title" => "Layanan"
    ]);
});

Route::get('/jadwalpencariandana', function() {
    return view('jadwalpencariandana', [
        "title" => "Layanan"
    ]);
});

Route::get('/pemberkatannikah', function() {
    return view('pemberkatannikah', [
        "title" => "Kami Peduli"
    ]);
});

Route::get('/halpemberkatannikah', [PemberkatannikahController::class, 'index']);
Route::post('/halpemberkatannikah', [PemberkatannikahController::class, 'store']);

Route::get('/penyerahananak', function() {
    return view('penyerahananak', [
        "title" => "Kami Peduli"
    ]);
});

Route::get('/halpenyerahananak', [PenyerahananakController::class, 'index']);
Route::post('/halpenyerahananak', [PenyerahananakController::class, 'store']);

Route::get('/baptisan', [BaptisanController::class, 'index']);
Route::post('/baptisan', [BaptisanController::class, 'store']);

Route::get('/penghiburan', [PenghiburanController::class, 'index']);
Route::post('/penghiburan', [PenghiburanController::class, 'store']);

Route::get('/kunjungandoa', [KunjungandoaController::class, 'index']);
Route::post('/kunjungandoa', [KunjungandoaController::class, 'store']);

Route::get('/persembahan', function() {
    return view('persembahan', [
    "title" => "Persembahan"
    ]);
});

Route::get('/hubungikami', [HubungikamiController::class, 'index']);
Route::post('/hubungikami', [HubungikamiController::class, 'store']);

Route::get('/masuk', [MasukController::class, 'index'])->name('masuk')->middleware('guest');
Route::post('/masuk', [MasukController::class, 'authenticate']);
Route::post('/logout', [MasukController::class, 'logout']);

Route::get('/daftar', [DaftarController::class, 'index'])->middleware('guest');
Route::post('/daftar', [DaftarController::class, 'store']);

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

Route::resource('/dashboard/gembalasidang', DashboardGembalasidangController::class)-> middleware('auth');

Route::resource('/dashboard/hubungikami', DashboardHubungikamiController::class)-> middleware('auth');

Route::resource('/dashboard/pemberkatannikah', DashboardPemberkatannikahController::class)-> middleware('auth');

Route::resource('/dashboard/penyerahananak', DashboardPenyerahananakController::class)-> middleware('auth');

Route::resource('/dashboard/baptisan', DashboardBaptisanController::class)-> middleware('auth');

Route::resource('/dashboard/kunjungandoa', DashboardKunjungandoaController::class)-> middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)-> middleware('auth');

Route::resource('/dashboard/penghiburan', DashboardPenghiburanController::class)-> middleware('auth');

Route::resource('/dashboard/ibadahraya', DashboardIbadahrayaController::class)-> middleware('auth');



