<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

//Publicas
Route::get('/', function () {
    return view('welcome');
});


Route::get('/sobreNosotros', function () {
    return view('sobreNosotros');
});

//Route::get('/', [App\http\Controllers\WelcomeController::class, 'index']);

Auth::routes();


//Privadas

Route::middleware(['auth'])->group(function (){

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/a/{user}', [PropertyController::class, 'index'])
    ->name('user.properties');

    Route::get('/e/{user}', [OwnerController::class, 'index'])
    ->name('user.owners');

    Route::resource('users', UserController::class)
    ->except(['index']);

    Route::resource('properties', PropertyController::class)
    ->middleware('auth');

    Route::resource('owners', OwnerController::class)
    ->middleware('auth');

});
