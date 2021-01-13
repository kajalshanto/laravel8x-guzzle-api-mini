<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuzzleClientController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [GuzzleClientController::class, 'getAllData'])->name('post.all');
Route::post('/posts', [GuzzleClientController::class, 'storeData'])->name('post.store');
Route::get('/posts/{id}', [GuzzleClientController::class, 'SingleData'])->name('post.read');
Route::get('/posts/{id}', [GuzzleClientController::class, 'editData'])->name('post.edit');
Route::put('/posts/{id}', [GuzzleClientController::class, 'updateData'])->name('post.update');

##Delte here showing data thats why get but in application we have to use delete
Route::get('/delete-posts/{id}', [GuzzleClientController::class, 'deleteData'])->name('post.delete');