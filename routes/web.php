<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BerandaController;
use GuzzleHttp\Middleware;

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

Route::middleware(['auth', 'role_id:superadmin'])->group(function () {

    Route::get('/superadmin-sidebar', function () {
        return view('superadmin.component.sidebar');
    })->name('superadmin-sdr');

    Route::get('/superadmin-beranda', 'BerandaController@sindex')->name('superadmin-beranda');

    Route::get('/superadmin-list-user', 'UserController@index')->name('superadmin-list-user');
    Route::get('/superadmin-tambahkan-user', 'UserController@create')->name('superadmin-tambahkan-user');
    Route::post('superadmin-store/', 'UserController@store')->name('superadmin-store');
    Route::get('/superadmin-show/{user}', 'UserController@show')->name('superadmin-show');
    Route::get('/superadmin-edit', 'UserController@edit')->name('superadmin-edit');
    Route::put('/superadmin-update/{id}', 'UserController@update')->name('superadmin-update');
    Route::delete('/superadmin-destroy/{user}', 'UserController@destroy')->name('superadmin-destroy');

    Route::get('/superadmin-profile', 'ProfileController@sprofile')->name('superadmin-profile');
    Route::get('/superadmin-profile-edit', 'ProfileController@sedit')->name('superadmin-profile-edit');
    Route::put('/superadmin-profile-update', 'ProfileController@supdate')->name('superadmin-profile-update');

    Route::get('/superadmin-check-tabungan', 'UangController@checktabungan')->name('superadmin-check-tabungan');
    Route::post('/superadmin-tambahtab', 'UangController@tambahtab')->name('superadmin-tambahtab');
    Route::get('/superadmin-list-tabungan', 'UangController@listtabungan')->name('superadmin-list-tabungan');

    Route::get('/superadmin-check-tarik-tunai', 'UangController@checktarik')->name('superadmin-check-tarik-tunai');
    Route::post('/superadmin-tambahtar', 'UangController@tambahtar')->name('superadmin-tambahtar');
    Route::get('/superadmin-list-tarik-tunai', 'UangController@listtarik')->name('superadmin-list-tarik-tunai');

    Route::get('/superadmin-logout', 'LoginController@logout')->name('superadmin-logout');
});

Route::middleware(['auth', 'role_id:admin'])->group(function () {

    Route::get('/admin-sidebar', function () {
        return view('admin.component.sidebar');
    })->name('admin-sdr');

    Route::get('/admin-beranda', 'BerandaController@aindex')->name('admin-beranda');

    Route::get('/admin-list-user', 'UserController@aindex')->name('admin-list-user');
    Route::get('/admin-tambahkan-user', 'UserController@acreate')->name('admin-tambahkan-user');
    Route::post('admin-store/', 'UserController@astore')->name('admin-store');
    Route::get('/admin-show/{user}', 'UserController@ashow')->name('admin-show');
    Route::get('/admin-edit', 'UserController@aedit')->name('admin-edit');
    Route::put('/admin-update/{id}', 'UserController@aupdate')->name('admin-update');
    Route::delete('/admin-destroy/{user}', 'UserController@adestroy')->name('admin-destroy');

    Route::get('/admin-profile', 'ProfileController@aprofile')->name('admin-profile');
    Route::get('/admin-profile-edit', 'ProfileController@aedit')->name('admin-profile-edit');
    Route::put('/admin-profile-update', 'ProfileController@aupdate')->name('admin-profile-update');

    Route::get('/admin-check-tabungan', 'UangController@achecktabungan')->name('admin-check-tabungan');
    Route::post('/admin-tambahtab', 'UangController@atambahtab')->name('admin-tambahtab');
    Route::get('/admin-list-tabungan', 'UangController@alisttabungan')->name('admin-list-tabungan');

    Route::get('/admin-check-tarik-tunai', 'UangController@achecktarik')->name('admin-check-tarik-tunai');
    Route::post('/admin-tambahtar', 'UangController@atambahtar')->name('admin-tambahtar');
    Route::get('/admin-list-tarik-tunai', 'UangController@alisttarik')->name('admin-list-tarik-tunai');

    Route::get('/admin-logout', 'LoginController@logout')->name('admin-logout');
});


Route::middleware(['auth', 'role_id:nasabah'])->group(function () {

    Route::get('/nasabah-sidebar', function () {
        return view('nasabah.component.sidebar');
    })->name('nasabah-sdr');

    Route::get('/nasabah-beranda', 'BerandaController@nindex')->name('nasabah-beranda');

    Route::get('/nasabah-profile', 'ProfileController@nprofile')->name('nasabah-profile');

    Route::get('/nasabah-profile-edit', 'ProfileController@nedit')->name('nasabah-profile-edit');

    Route::put('/nasabah-profile-update', 'ProfileController@nupdate')->name('nasabah-profile-update');

    Route::get('/nasabah-tabungan', 'UangController@tabungan')->name('nasabah-tabungan');

    Route::get('/nasabah-tarik-tunai', 'UangController@tarik')->name('nasabah-tarik-tunai');

    Route::get('/nasabah-logout', 'LoginController@logout')->name('nasabah-logout');
});

Route::get('/', 'LoginController@login');
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/loginauth', 'LoginController@loginauth')->name('loginauth');
