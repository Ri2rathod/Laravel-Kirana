<?php

use App\Http\Controllers\guestController;
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

Route::get('/', [guestController::class,'index'] );
Route::get('product', [guestController::class,'product'] );
Route::get('login', [guestController::class,'login'] );
