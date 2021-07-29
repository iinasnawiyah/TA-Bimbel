<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PengajarController;
use App\Http\Controllers\admin\SiswaController;
use App\Http\Controllers\guru\DashboardguruController;
use App\Http\Controllers\guru\DatasiswaController;
use App\Http\Controllers\guru\ManajemenController;
use App\Http\Controllers\siswa\DashboardsiswaController;
use App\Http\Controllers\siswa\PaketController;


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

// Route::get('/', function () {
//     return view('admin.dashboard');
// });

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {
	Route::middleware(['Ceklogin:admin'])->get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboardadmin');
	Route::middleware(['Ceklogin:pengajar'])->get('guru/dashboard', [DashboardguruController::class, 'index'])->name('dashboardguru');
	Route::middleware(['Ceklogin:siswa'])->get('siswa/dashboard', [DashboardsiswaController::class, 'index'])->name('dashboardsiswa');
	

	Route::prefix('guru')->group(function(){
		Route::get('/datasiswa', [DatasiswaController::class, 'index'])->name('dataSiswa');
		Route::get('/manajemen', [ManajemenController::class, 'index'])->name('manajemenKegiatan');
		Route::get('/manajemen/form', [ManajemenController::class, 'form'])->name('tambahKegiatan');
		Route::post('/manajemen/create', [ManajemenController::class, 'create'])->name('prosesTambahKegiatan');
	});
		Route::get('/autosiswa', [ManajemenController::class, 'autosiswa'])->name('autoSiswa');
		Route::get('/getsiswa', [ManajemenController::class, 'getsiswa'])->name('getSiswa');


	Route::get('logout', [AuthController::class, 'logout'])->name('logout');
	Route::get('logoutwithsession', [AuthController::class, 'logoutwithsession'])->name('logoutsession');
});



Route::get('admin/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');
Route::get('admin/pembayaran/create', [PembayaranController::class, 'create'])->name('tambahData');


// Route::get('/', [AuthController::class, 'FormLogin'])->name('login');
// Route::get('login', [AuthController::class, 'FormLogin'])->name('login');

// Route::group(['middleware' => 'auth'], function () {

// });
Route::prefix('admin')->group(function () {
    Route::resource('kelas', App\Http\Controllers\admin\KelasController::class);
    Route::resource('kelpaket', App\Http\Controllers\admin\PaketController::class);
    Route::resource('pengajar', PengajarController::class);
    Route::resource('siswa', SiswaController::class);
    Route::get('kelRiwayatPaket', [App\Http\Controllers\admin\PaketController::class, 'kelRiwayatPaket'])->name('kelRiwayatPaket');
    Route::get('kelPembayaran/{id}', [App\Http\Controllers\admin\PaketController::class, 'kelPembayaran'])->name('kelPembayaran');
    Route::get('editKelBayar/{id}', [App\Http\Controllers\admin\PaketController::class, 'editKelBayar'])->name('editKelBayar');
    Route::post('submitPengajar', [App\Http\Controllers\admin\PaketController::class, 'submitPengajar'])->name('submitPengajar');
    Route::post('submitLunas', [App\Http\Controllers\admin\PaketController::class, 'submitLunas'])->name('submitLunas');
});
Route::prefix('siswa')->group(function () {
    Route::resource('paket', App\Http\Controllers\siswa\PaketController::class);
    Route::post('pilihPaket', [App\Http\Controllers\siswa\PaketController::class, 'pilihPaket'])->name('pilihPaket');
    Route::get('riwayatPaket', [App\Http\Controllers\siswa\PaketController::class, 'riwayatPaket'])->name('riwayatPaket');
    Route::get('listPembayaran/{id}', [App\Http\Controllers\siswa\PaketController::class, 'listPembayaran'])->name('listPembayaran');
    Route::post('tambahBayar', [App\Http\Controllers\siswa\PaketController::class, 'tambahBayar'])->name('tambahBayar');
    Route::get('listKegiatan/{id}', [App\Http\Controllers\siswa\PaketController::class, 'listKegiatan'])->name('listKegiatan');
});
