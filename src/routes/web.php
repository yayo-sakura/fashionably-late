<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FashionablylateController;
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

Route::get('/', [FashionablylateController::class, 'index']);
Route::post('/contacts/confirm', [FashionablylateController::class, 'confirm']);
Route::post('/contacts', [FashionablylateController::class, 'store']);
Route::post('/admin', [FashionablylateController::class, 'admin']);
Route::get('/register', [FashionablylateController::class, 'register']);
Route::get('/login', [FashionablylateController::class, 'login']);
