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

//Ekspor Sementara
Route::get('ekspor-sementara/create','EksporSementaraController@create')->name('eksporSementara.create');
Route::post('ekspor-sementara/store','EksporSementaraController@store')->name('eksporSementara.store');
Route::get('ekspor-sementara/show/{eksporS}','EksporSementaraController@show')->name('eksporSementara.show');


Route::post('/upload-lampiran/{id}', 'DokumenController@uploadlampiran')->name('uploadLampiran')->middleware('auth');
Route::get('/download-lampiran/{id}', 'DokumenController@downloadFile')->name('downloadLampiran')->middleware('auth');


//print PDF
Route::get("/print/dokumen/{doc}", 'PrintPdfController@show');


