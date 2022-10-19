<?php

use App\Http\Controllers\cobacontroller;
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

Route::get('/', function () {
    //Controller
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
});
// syntax : php artisan make:controller namactrl -r
// Route about (hyperlink) [(controller),(function)]
Route::get('/about', [App\Http\Controllers\aboutcontroller::class, 'index']);

Route::get('/mahasiswa',[App\Http\Controllers\mahasiswacontroller::class, 'index']);

Route::view('/coba', 'coba');

Route::get('/coba/jenis', [cobacontroller::class, 'jenis']);

Route::get('/coba/tahun/{berapa}', [cobacontroller::class, 'tahun']);

Route::get('/coba/penerbit/', [cobacontroller::class, 'penerbit']);
