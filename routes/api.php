<?php

use App\Http\Controllers\Bulletin;
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

Route::prefix('bulletin')->group(function () {
    Route::get('/', [Bulletin::class, 'index']);
    Route::post('/create', [Bulletin::class, 'create']);
    Route::patch('/edit', [Bulletin::class, 'edit']);
    Route::delete('/{id}/delete', [Bulletin::class, 'delete']);
});
