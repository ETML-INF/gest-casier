<?php

use App\Http\Controllers\LockerController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student/create', function () {
    return view('student/create-student');
});

Route::post('/student/create', [SutdentController::class, 'create']);

Route::get('/locker/create', function () {
    return view('locker/create-locker');
});
Route::post('/locker/create', [LockerController::class, 'create']);
Route::get('/locker/delete/id', [LockerController::class, 'delete']);
Route::get('/locker/manage', [LockerController::class, 'get_all']);

