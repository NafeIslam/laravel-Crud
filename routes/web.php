<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome', ['posts'=> post::paginate(3)]);
})->name('home');

Route::get('/create', [PostController::class, 'create']);

Route::post('/store', [PostController::class, 'ourfilestore'])->name('store');

Route::get('/edit/{id}', [PostController::class, 'editData'])->name('edit');

Route::post('/update/{id}', [PostController::class, 'updateData'])->name('update');

Route::delete('/delete/{id}', [PostController::class, 'deleteData'])->name('delete');

