<?php

use App\Http\Controllers\API\ProductController;
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

Route::middleware([])->controller(ProductController::class)->prefix('/admin/products')->group(function() {
    Route::get('/', 'getItems');
    Route::get('/show/{id}', 'getItemById');
    // Route::post('/create', 'create');
    // Route::get('/edit/{id}', 'edit');
    // Route::post('/update', 'update');
    // Route::post('/store', 'store');
    // Route::get('/delete/{id}', 'delete');
});