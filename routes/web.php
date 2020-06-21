<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', function () {
    dd(session()->all());
    return view('home');
})->middleware('authSSO');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pengajuan', 'PengajuanController@index')->name('pengajuanIndex');
Route::get('/pengajuan-buat', 'PengajuanController@create')->name('pengajuanCreate');
Route::get('/pengajuan/{id}', 'PengajuanController@show')->name('pengajuanShow');
Route::post('/pengajuan-store', 'PengajuanController@store')->name('pengajuanStore');

//Ekspor Sementara
Route::get('ekspor-sementara/create','EksporSementaraController@create')->name('eksporSementara.create');
Route::post('ekspor-sementara/store','EksporSementaraController@store')->name('eksporSementara.store');
Route::get('ekspor-sementara/{id}/edit','EksporSementaraController@edit')->name('eksporSementara.edit');

Route::post('/upload-lampiran/{id}', 'DokumenController@uploadlampiran')->name('uploadLampiran');
Route::get('/download-lampiran/{id}', 'DokumenController@downloadFile')->name('downloadLampiran');


//print PDF
Route::get("/print/dokumen/{doc}", 'PrintPdfController@show');


