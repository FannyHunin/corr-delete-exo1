<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\MenController;
use App\Http\Controllers\WomenController;
use Illuminate\Support\Facades\Route;

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

/*READ*/
Route::get('/', [MemberController::class, 'index'])->name('allMembers');
Route::get('/men', [MenController::class, 'index'])->name('allMen');
Route::get('/women', [WomenController::class, 'index'])->name('allWomen');

/*CREATE*/
Route::get('/members/create', [MemberController::class, 'create'])->name('createMembers');

/*STORE*/
Route::post('/members', [MemberController::class, 'store'])->name('store');

/*DELETE*/
Route::delete('/members/{id}/delete', [MemberController::class, 'destroy'])->name('delete');