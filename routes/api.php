<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PunchController;

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

Route::get('/punch.list', [PunchController::class, 'index']);
Route::get('/punch.get', [PunchController::class, 'show']);
Route::get('/punch.update', [PunchController::class, 'update']);
Route::get('/punch.add', [PunchController::class, 'store']);
Route::get('/punch.delete', [PunchController::class, 'destroy']);

