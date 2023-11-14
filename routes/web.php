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
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tugas', function () {
    return view('tugas');
});

Route::get('/perulangan', function () {
    $nilai_awal = 1;
    $mobil_rusak = 5;
    $jumlah_mobil = 10;
    while ($nilai_awal <= $jumlah_mobil){
      //  if ($nilai_awal > $mobil_rusak){
      //  echo "mobil ke-". $nilai_awal .'dalam kondisi rusak!<br>';
      //  } else {
      //  echo "mobil ke-". $nilai_awal .'beroperasi dengan baik!<br>';
      //  }
      if ($nilai_awal <= $mobil_rusak){
        echo "mobil ke-" . $nilai_awal . 'beroperasi dengan baik!<br>';
      }
        $nilai_awal++;
     }
     echo '<hr>';
     for ($i=$mobil_rusak +1; $i <= $jumlah_mobil; $i++) { 
        echo 'mobil ke-' . $i . 'dalam kondisi rusak!<br>'; 
     }

    //return view('');
});

Route::get('/tabel', function () {
    $npm = [123,124,125];
    return view('pertemuan 5/tabel' , compact('npm'));
});