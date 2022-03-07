<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes(['verify'=>true]);

Route::prefix('admin')
    ->middleware(['auth','admin'])
    ->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
        
    });

Route::get('/siswa', [App\Http\Controllers\Admin\SiswaController::class, 'index']);
Route::get('/siswa/create', [App\Http\Controllers\Admin\SiswaController::class, 'create']);
Route::get('/siswa/createortu', [App\Http\Controllers\Admin\SiswaController::class, 'createortu']);
Route::get('/siswa/createjuara', [App\Http\Controllers\Admin\SiswaController::class, 'createjuara']);
Route::get('/siswa/createsku', [App\Http\Controllers\Admin\SiswaController::class, 'createsku']);
Route::get('/siswa/createskk', [App\Http\Controllers\Admin\SiswaController::class, 'createskk']);
Route::get('/siswa/creategaruda', [App\Http\Controllers\Admin\SiswaController::class, 'creategaruda']);
Route::get('/siswa/createkegiatan', [App\Http\Controllers\Admin\SiswaController::class, 'createkegiatan']);

//Route Table Siswa
// Route::get('/siswa', 'SiswaController@index');
// Route::get('/siswa/create', 'SiswaController@create');
// Route::post('/siswa/store', 'SiswaController@store');
// Route::get('/siswa/{id}/edit', 'SiswaController@edit');
// Route::patch('/siswa/{id}', 'SiswaController@update');
// Route::delete('/siswa/{id}', 'SiswaController@destroy');