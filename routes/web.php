<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ {
    AuthorController,
    BookController,
};



Route::group(['prefix'=>'/author'], function () {
    Route::get('/',[AuthorController::class,'index']);
    Route::post('/', [AuthorController::class,'store']);
    Route::get('/{id}/destroy',[AuthorController::class, 'destroy']);
    Route::get('/{id}/patch', [AuthorController::class, 'edit']);
    Route::post('/{id}/patch', [AuthorController::class, 'update']);
    Route::get('/{id}', [AuthorController::class, 'show']);
});

Route::group(['prefix'=>'/book'], function () {
    Route::post('/add', [BookController::class, 'store']);
    Route::get('/{id}/edit', [BookController::class, 'edit']);
    Route::post('/{id}/patch', [BookController::class, 'update']);
    Route::get('/{id}/destroy', [BookController::class, 'destroy']);
    Route::get('/{id}', [BookController::class, 'show']);
});
