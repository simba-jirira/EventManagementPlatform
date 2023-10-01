<?php

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

Route::name('system.')->prefix('system')->group(function (){
    Route::controller(DashboardController::class)->group(function (){
        Route::get('/home','index')->name('dashboard');
    });
})->middleware('auth');


