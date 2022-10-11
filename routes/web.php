<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    GuruController,
    KelasController,
    MapelController,
    SiswaController,
    DashboardController,
    AuthController
};

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

Route::get('/', function () {
    return view('layout.app');
});

// route login/logout
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('login.postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::group(['middleware' => ['auth', 'checkrole:admin']], function(){

    // route dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    
    //route guru
    Route::get('/guru/data',[GuruController::class, 'data'])->name('guru.data');
    Route::resource('/guru', GuruController::class );
    
    //route kelas
    
    Route::get('/kelas/data',[KelasController::class, 'data'])->name('kelas.data');
    Route::resource('/kelas', KelasController::class );
    
    //route mapel
    Route::get('/mapel/data',[MapelController::class, 'data'])->name('mapel.data');
    Route::resource('/mapel', MapelController::class );
    
    //route siswa
    Route::get('/siswa/data',[SiswaController::class, 'data'])->name('siswa.data');
    Route::resource('/siswa', SiswaController::class );
    Route::get('/siswa/profile/{id}',[SiswaController::class, 'profile'])->name('siswa.profile');

    
});

Route::group(['middleware' => ['auth', 'checkrole:admin,siswa']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});