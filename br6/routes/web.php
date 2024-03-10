<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[MyController::class,'index']);
Route::get('/address',[MyController::class,'index1']);
Route::get('/enterstudent',[MyController::class,'index2']);
Route::post('/addstudent', [MyController::class, 'store'])->name('addstudent');

