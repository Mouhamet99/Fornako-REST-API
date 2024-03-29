<?php

use App\Http\Controllers\FoundLossController;
use App\Http\Controllers\LossController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\UserController;
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

Route::apiResource('losses', LossController::class);
Route::apiResource('users', UserController::class);
Route::apiResource('found-losses', FoundLossController::class);
Route::apiResource('matches', MatchController::class);
