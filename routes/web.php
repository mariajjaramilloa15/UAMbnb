<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\cuentaTotalController;
use App\Http\Controllers\imageController;
use App\Http\Controllers\ReportController;
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

    Route::resource('users', UserController::class)
    ->except(['index']);

    Route::resource('properties', PropertyController::class);

    Route::get('cuentaTotal', [cuentaTotalController::class, 'create'])
    ->middleware('auth');

    Route::get('/property', function () {
        return view('properties.property');
    });

    Route::get('/pay', function () {
        return view('pay');
    });

    Route::get('image', [imageController::class, 'index'])
    ->middleware('auth');

    Route::get('imageguardar', [imageController::class, 'imageguardar'])
    ->middleware('auth');

    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');

});