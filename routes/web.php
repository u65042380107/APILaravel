<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


Route::get('/', [TestController::class, 'index'])->name('home');
Route::get('/detail/{id}', [TestController::class, 'detail'])->name('detail');
