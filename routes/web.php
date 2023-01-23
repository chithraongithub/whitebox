<?php

use App\Http\Controllers\QuestionController;
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

Route::get('/', [QuestionController::class,'firstQuestion'])->name('firstQuestion');
Route::get('/secondQuestion', [QuestionController::class,'secondQuestion'])->name('secondQuestion');
Route::get('/thirdQuestion', [QuestionController::class,'thirdQuestion'])->name('thirdQuestion');
