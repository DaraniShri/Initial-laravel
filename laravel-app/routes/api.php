<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< Updated upstream
=======
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Work\RegisterController;
>>>>>>> Stashed changes


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< Updated upstream
=======

Route::controller(StudentController::class)->group(function () {
    Route::get('show','index');
    Route::get('find/{id}','show');
    Route::post('insert','store');
    Route::post('update/{id}','update');
    Route::post('delete/{id}','destroy');
});

Route::post('/register', RegisterController::class);
>>>>>>> Stashed changes
