<?php

use App\Http\Controllers\PhoneController;
use App\Http\Controllers\UserController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
route::get('/',[UserController::class,'index'])->name('index');
route::prefix('user')->group(function() {
    route::post('/create',[UserController::class,'create'])->name('create');
    route::post('/update',[UserController::class,'update'])->name('update');
    route::get('/delete/{id}',[UserController::class,'delete'])->name('delete');
    route::get('/create',[UserController::class,'createPage'])->name('create_page');
    route::get('/update/{id}',[UserController::class,'updatePage'])->name('update_page');
});

route::prefix('phone')->group(function() {
    route::get('/phone/{id}',[PhoneController::class,'phonePage'])->name('phonePage');
    route::get('/create/{id}',[PhoneController::class,'createPage'])->name('create_num');
    route::post('/create',[PhoneController::class,'create'])->name('create_phone');
    route::get('/update/{id}',[PhoneController::class,'updatePage'])->name('update_num');
    route::post('/update/{id}',[PhoneController::class,'update'])->name('update_phone');
    route::get('/delete/{id}',[PhoneController::class,'delete'])->name('delete_phone');
});





