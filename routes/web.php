<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualanController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('penjualan', PenjualanController::class);

?>
