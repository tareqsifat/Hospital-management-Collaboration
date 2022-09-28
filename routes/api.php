<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nurseController;
use App\Http\Controllers\DoctorController;
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

Route::get('/nurse',[nurseController::class,'index']);
// Route::get('/nurse',[nurseController::class,'show']);
Route::post('/nurse',[nurseController::class,'store']);
Route::put('/nurse/{id}',[nurseController::class,'update']);
Route::delete('/nurse/{id}',[nurseController::class,'delete']);
//Doctor Route
 Route::resource('doctor',DoctorController::class);
