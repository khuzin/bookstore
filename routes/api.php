<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ {
    BookController,
};


Route::group(['prefix'=>'/v1/books'], function () {
    Route::get('/list', [BookController::class,'index']);
    Route::get('/by-id', [BookController::class,'show']);
    Route::post('/update', [BookController::class,'update']);
    Route::delete('/{id}', [BookController::class,'destroy']);
});
