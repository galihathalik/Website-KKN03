<?php

use Illuminate\Support\Facades\Route;use App\Http\Controllers\Controller\HomeController;

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
    return view('welcome');
});


Route::get('/contoh', function () {
    return view('contoh');
});

// Route::get('/Home',[HomeController::class], 'Home');

Route::get('/Home', 'HomeController@index');
Route::get('/Home', 'HomeController@tambah');
Route::get('/Home', 'HomeController@kurang');

Route::get('/index', 'DashboardController@index');
Route::get('/index/struktur-organisasi', 'DashboardController@strukturOrganisasi');
Route::get('/index/data-umum', 'DashboardController@dataUmum');

// GAK KEPAKE
Route::get('/index/data-kewenangan', 'DashboardController@dataKewenangan');
Route::get('/index/data-kelembagaan', 'DashboardController@dataKelembagaan');
////