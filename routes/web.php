<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\emailController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', function () {
    return view('login');
});

Route::get('/profile', [userController::class, 'profile']);


Route::get('/index', [userController::class, 'index']);
Route::get('/add_user', [userController::class, 'add']);

Route::POST('/adduser', [userController::class, 'store']);
Route::POST('/authenticate', [loginController::class, 'login']);
Route::get('/logout', [loginController::class, 'logout']);

Route::get('edituser/{id}', [userController::class, 'edit']);
Route::put('updateuser/{id}', [userController::class, 'update']);
Route::get('deleteuser/{id}', [userController::class, 'delete']);






Route::post('/sendmail', [emailController::class, 'sendEmail']);