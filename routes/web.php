<?php

use App\Models\Setting;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\VisimisiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login1', [AuthController::class, 'login'])->name('post-login');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');


Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::resource('/kategori', KategoriController::class);
Route::resource('/berita', BeritaController::class);
Route::resource('/about', AboutController::class);
Route::resource('/visimisi', VisimisiController::class);
Route::resource('/setting', SettingController::class);
Route::resource('/sambutan', SambutanController::class);
Route::resource('/navbar', NavbarController::class);
Route::resource('/page', PageController::class);
Route::resource('/program', ProgramController::class);
Route::resource('/galery', GaleryController::class);
Route::resource('/user', UserController::class);

Route::get('/', [HomeUserController::class, 'index'])->name('home')->middleware('visitor');
Route::get('/beritas1/{slug}', [HomeuserController::class, 'detailberita'])->name('detailberita');
Route::get('/profil', [HomeuserController::class, 'profil'])->name('profil');
Route::get('/sambutan1', [HomeuserController::class, 'sambutan'])->name('sambutan');
Route::get('/visimisis', [HomeuserController::class, 'visimisi'])->name('visimisis');
Route::get('/beritas/{nama_kategori}', [HomeuserController::class, 'berita'])->name('beritas');
Route::get('/programs', [HomeuserController::class, 'program'])->name('programs');
Route::get('/galerys', [HomeuserController::class, 'galery'])->name('galerys');
Route::get('/kontak', [HomeuserController::class, 'kontak'])->name('kontak');


Route::get('{nama_route}', [HomeuserController::class, 'namaroute']);
Route::get('detailpage/{id}', [HomeuserController::class, 'detailpage'])->name('detail');
