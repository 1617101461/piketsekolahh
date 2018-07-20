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
    return view('gues');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('cekuser','FrontendController');

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function(){
Route::resource('/', 'AdminController@index');
Route::resource('absensiguru', 'AbsensiguruController');
Route::resource('absensisiswa', 'AbsensisiswaController');
Route::resource('petugaspiket', 'PetugaspiketController');
Route::resource('guru', 'GuruController');
Route::resource('siswa', 'SiswaController');
Route::resource('kelas', 'KelasController');
Route::resource('jurusan', 'JurusanController');
Route::get('/home', 'HomeController@index')->name('home');

//export product
Route::get('/export_excel','ExportExcelController@index');
Route::get('/export_excel/excel','ExportExcelController@excel')->name('export_excel.excel');
});


Route::group(['prefix'=>'member','middleware'=>['auth','role:member']],function(){
Route::get('absensiguru', 'AbsensiguruController@absensi')->name('absensiguru');
Route::get('absensisiswa', 'AbsensisiswaController@absensi')->name('absensisiswa');
Route::get('petugaspiket', 'PetugaspiketController@petugas')->name('petugaspiket');
Route::resource('rekap','RekapController');
});
Route::post('laporanabsensi' , 'RekapController@index2');
Route::get('export','ExportExcelController@contactExport')->name('contact.export');
Route::get('rekap', function () {
    return view('rekap.index2');
});


	
