<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SchoolController;

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

// Members
Route::get('/members', [MemberController::class, 'index']);
Route::get('/members/{member}', [MemberController::class, 'show']);
Route::post('/members', [MemberController::class, 'store']);

//Schools
Route::get('/schools', [SchoolController::class, 'index']);
Route::get('/schools/{school}/members', [SchoolController::class, 'members']);

