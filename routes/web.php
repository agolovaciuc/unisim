<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\StorageController;


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


Route::name('user.')->group(function(){

    Route::view('/private', 'admin.storage')->middleware('auth')->name('private');

    Route::get('/login', function(){
        if(Auth::check()){
            return  redirect(route('admin.storage'));
        }
        return view('login');
    })->name('login');

    //Route::post('/login', [])

    //  Route::get('/logout', function(){   })->name('logout', [])->name('logout');

    Route::get('/registration', function(){
        if(Auth::check()){
            return  redirect(route('user.private'));
        }
        return view('registration');
    })->name('registration');

    Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'save']);

});


/* ADMIN  PANEL  */

Route::prefix('admin')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');

    /* STORAGE */
    Route::get('/storage', [StorageController::class, 'index'])->name('admin.storage');
    Route::get('/closedpage', [StorageController::class, 'closedpage'])->name('admin.closedpage');

});


