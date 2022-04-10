<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::group(['namespace' => '\App\Http\Controllers\V1\Item'], function() {
        Route::post('item/create', 'CreateController');
        Route::patch('item/{item}/edit', 'EditController');
        Route::delete('item/{item}/delete', 'DeleteController');
        Route::get('item', 'ShowController');
    });
    Route::group(['namespace' => '\App\Http\Controllers\V1\Category'], function() {
        Route::post('category/create', 'CreateController');
        Route::delete('category/{category}/delete', 'DeleteController');
    });
});
