<?php

use App\Http\Controllers\Backend\System\Management\User\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;

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
Route::get('/hello', function (){
    return view('test');
});

Route::name('system.management.')->prefix('system/management')->group(function (){
    Route::controller(DashboardController::class)->group(function (){
        Route::get('/home','index')->name('dashboard');
    });
    Route::controller(UserController::class)->group( function () {
        Route::get('/users','index')->name('users');
        Route::get('/user/create/user','createUser')->name('users.create-user');
        Route::post('/user/create/user','store')->name('users.create-user');
        Route::post('/users/{user}','destroy')->name('user.delete');
    });
})->middleware('auth');


