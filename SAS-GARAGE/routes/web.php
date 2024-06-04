<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home.index');
// });

//untuk halaman about
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');

// Route::get('/testimonial', [HomeController::class, 'testimoni'])->name('testimoni');

//chevy
Route::get('/chevrolet/part', [HomeController::class, 'partchevy'])->name('partchevy');
Route::get('/chevrolet/service', [HomeController::class, 'service'])->name('service');
Route::get('/chevrolet/team', [HomeController::class, 'team'])->name('team');

//vespa
Route::get('/vespa/partvespa', [HomeController::class, 'partvespa'])->name('partvespa');
Route::get('/vespa/ecommerce', [HomeController::class, 'ecommerce'])->name('ecommerce');

//untuk halaman login/logout
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//untuk dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');


//untuk BE ADMIN
Route::resource('teknisi', TeknisiController::class)->middleware('auth');
Route::resource('service', ServiceController::class)->middleware('auth');
Route::resource('partvespa', PartController::class)->middleware('auth');
Route::resource('location', LocationController::class)->middleware('auth');
Route::resource('contact', ContactController::class)->middleware('auth');
Route::resource('partchevy', ChevyController::class)->middleware('auth');


