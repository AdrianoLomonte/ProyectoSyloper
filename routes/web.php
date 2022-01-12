<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*Route::get('/', function () {
    return view('welcome');
});*/


    Route::get('/', [PostController::class, 'index'])
        ->name('posts.index');


    Route::get('/crear', [PostController::class, 'create'])
        ->name('posts.create');

    Route::post('/crear', [PostController::class, 'store'])
        ->name('posts.store');

    Route::delete('/{borra}', [PostController::class, 'destroy'])
        ->name('posts.destroy');



    Route::get('/contactanos', [ContactanosController::class, 'index'])
        ->name('contactanos.index');

    Route::post('/contactanos', [ContactanosController::class, 'store'])
        ->name('contactanos.store');

