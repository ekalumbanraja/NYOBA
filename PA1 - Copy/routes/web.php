<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatajemaatController;

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
Route::get('/welcome', function () {
    return view('layout.admin');
});

Route::get('/', function () {
    return view('user.dashboard');
});

//url data jemaat melalui controller datajemaat
Route::get('/datajemaat',[DatajemaatController::class ,'index'])->name('datajemaat');
//url tambah data jemaat melalui controller datajemaat
Route::get('/tambahjemaat',[DatajemaatController::class ,'tambahjemaat'])->name('tambahjemaat');
//url insert data ke db
Route::post('/insertdata',[DatajemaatController::class ,'insertdata'])->name('insertdata');
Route::get('/tampilkandata/{id}',[DatajemaatController::class ,'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[DatajemaatController::class ,'updatedata'])->name('updatedata');
Route::get('/deletedata/{id}',[DatajemaatController::class ,'deletedata'])->name('deletedata');

