<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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


Route::get('/', [HomeController::class, 'index']);

Route::get('/users', [AdminController::class, 'users']);

Route::get('/deletemenu/{id}', [AdminController::class, 'deletemenu']);

Route::get('/deletechef/{id}', [AdminController::class, 'deletechef']);

Route::get('/uptadeview/{id}', [AdminController::class, 'uptadeview']);

Route::post('/update/{id}', [AdminController::class, 'update']);

Route::get('/foodmenu', [AdminController::class, 'foodmenu']);

Route::post('/uploadfood', [AdminController::class, 'upload']);

Route::get('/deleteusers/{id}', [AdminController::class, 'deleteusers']);

Route::post('/reservation', [AdminController::class, 'reservation']);

Route::get('/viewreservation', [AdminController::class, 'viewreservation']);

Route::get('/viewchef', [AdminController::class, 'viewchef']);

Route::get('/updatechef/{id}', [AdminController::class, 'updatechef']);

Route::post('/uploadchef', [AdminController::class, 'uploadchef']);

Route::post('/updatefoodchef/{id}', [AdminController::class, 'updatefoodchef']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
 Route::get('redirects','App\Http\Controllers\HomeController@redirects');