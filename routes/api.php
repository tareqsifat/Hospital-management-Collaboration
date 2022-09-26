<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nurseController;
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

Route::get('/nurse',[nurseContnroller::class,'index']);
// Route::get('/nurse',[nurseContnroller::class,'show']);
Route::post('/nurse',[nurseContnroller::class,'store']);
Route::put('/nurse/{id}',[nurseContnroller::class,'update']);
Route::delete('/nurse/{id}',[nurseContnroller::class,'delete']);
// Route::resource('nurses',[nurseContnroller::class]);
