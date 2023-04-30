<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/registration', [RegisterController::class, 'index']);
Route::post('/addtodb', [RegisterController::class, 'insertdata']);
Route::get('/view', [RegisterController::class, 'display']);
Route::get('/edit/{id}', [RegisterController::class, 'editdata']);
Route::put('/edit/{id}', [RegisterController::class, 'studentedit']);
Route::get('/delete/{id}', [RegisterController::class, 'studentdelete']);