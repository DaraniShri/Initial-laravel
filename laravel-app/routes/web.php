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
Route::post('/create',[EmployeeController::class,'insert']);

<<<<<<< Updated upstream
Route::get('delete/{id}',[EmployeeController::class, 'destroy']);
=======

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/login', function () {
    return view('employees/login');
});
>>>>>>> Stashed changes
