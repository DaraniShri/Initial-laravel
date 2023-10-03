<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('greeting', [UserController::class, 'sayHi']);
Route::redirect('/home', 'greeting'); 

Route::get('view', [EmployeeController::class, 'displayData']);

Route::get('insert',[EmployeeController::class,'insertform']);
Route::post('/create',[EmployeeController::class,'insertEmployee']);

Route::get('delete/{id}',[EmployeeController::class, 'destroy']);

Route::get('edit/{id}', [EmployeeController::class, 'edit']);
Route::post('update', [EmployeeController::class, 'update']);

