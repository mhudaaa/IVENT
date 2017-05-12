<?php

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
    return view('homepage');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/detail-event', function () {
    return view('detail-event');
});


// DASHBOARD
Route::get('/dash', function () {
    return view('dash/homepage');
});
Route::get('/dash/event', function () {
    return view('dash/event');
});
Route::get('/dash/detail-event', function () {
    return view('dash/detail-event');
});
Route::get('/dash/tiket', function () {
    return view('dash/tiket');
});
Route::get('/dash/detail-tiket', function () {
    return view('dash/detail-tiket');
});
Route::get('/dash/pesan', function () {
    return view('dash/pesan');
});
Route::get('/dash/detail-pesan', function () {
    return view('dash/detail-pesan');
});
Route::get('/dash/pengaturan', function () {
    return view('dash/pengaturan');
});
Route::get('/dash/pemberitahuan', function () {
    return view('dash/pemberitahuan');
});

// ADMIN
Route::get('/admeen', function () {
    return view('admeen/homepage');
});
Route::get('/admeen/event', function () {
    return view('admeen/event');
});
Route::get('/admeen/detail-event', function () {
    return view('admeen/detail-event');
});
Route::get('/admeen/tiket', function () {
    return view('admeen/tiket');
});
Route::get('/admeen/detail-tiket', function () {
    return view('admeen/detail-tiket');
});
Route::get('/admeen/pesan', function () {
    return view('admeen/pesan');
});
Route::get('/admeen/detail-pesan', function () {
    return view('admeen/detail-pesan');
});
Route::get('/admeen/pengaturan', function () {
    return view('admeen/pengaturan');
});
Route::get('/admeen/pemberitahuan', function () {
    return view('admeen/pemberitahuan');
});