<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pengajuan', 'PengajuanController@index')->name('pengajuanIndex')->middleware('auth');
Route::get('/pengajuan-buat', 'PengajuanController@create')->name('pengajuanCreate')->middleware('auth');
Route::get('/pengajuan/{id}', 'PengajuanController@show')->name('pengajuanShow')->middleware('auth');
Route::post('/pengajuan-store', 'PengajuanController@store')->name('pengajuanStore')->middleware('auth');

Route::get('ekspor-sementara/create','EksporSementaraController@create')->name('eksporSementara.create');
Route::get('ekspor-sementara/cetak','EksporSementaraController@cetak')->name('eksporSementara.create');

Route::post('/upload-lampiran/{id}', 'DokumenController@uploadlampiran')->name('uploadLampiran')->middleware('auth');
Route::get('/download-lampiran/{id}', 'DokumenController@downloadFile')->name('downloadLampiran')->middleware('auth');


