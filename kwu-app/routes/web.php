<?php

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
    return view('welcome');
});

//URL About
Route::get('biodata', function () {
    return 'Ini Biodata';
});

// //URL Contact
// Route::get('/contact', function () {
//     return view('contact');
// });

//Versi Pendek URL Contact
Route::view('/profile', 'profile', ['name' => 'Wananda Dilla Zahra']);

//Versi Array Dalam bentuk variabel
$profile = [
    'name' => 'Wananda Dilla Zahra',
    'phone' => '+62 812315029',
    'position' => 'Manager'
];
Route::view('/profile', 'profile', $profile);

//Versi Data Dari URL
//ex http://127.0.0.1:8000/berita/kasuspenculikancemaja
Route::get('/berita/{id}', function ($id){
    return 'Berita ID : ' . $id;
});

Route::get('/berita/{id}/komentar{komentar}', function ($id, $komentar){
    return 'Berita ID : ' . $id . '<br> komentar berita :'. $komentar;
});




Route::prefix('smkn1subang')->group(function() {
    route::get('/sejarah', function() {
        return 'Ini Sejarah';
    });

    route::get('/visimisi', function () {
        return 'Ini Visi Misi';

    });

    route::get('/jurusan', function(){
        return 'Ini Jurusan';
    });

    route::get('/prestasi', function(){
        return 'Ini Prestasi';
    });

});

