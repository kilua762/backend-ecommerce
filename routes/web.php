<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $angka = 10000;

    //format angka dengan helper
    $hasil = moneyFormat($angka);
    
    echo $hasil;
});
