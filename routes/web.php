<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/members/home', [MemberController::class, 'home'])->name('home');

Route::post('/members', [MemberController::class, 'store'])->name('members');

Route::get('/schools/{school}/members', [SchoolController::class, 'members'])->name('schoolMembers');
