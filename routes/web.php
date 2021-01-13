<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuzzleClientController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [GuzzleClientController::class, 'getAllData'])->name('getpost.all');
Route::get('/posts/{id}', [GuzzleClientController::class, 'getSingleData'])->name('getpost.single');

##Delte here showing data thats why get but in application we have to use delete
Route::get('/delete-posts/{id}', [GuzzleClientController::class, 'deleteData'])->name('deletepost.single');