<?php

use App\Http\Controllers\LogementController;
use App\Http\Controllers\test;
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

Route::get('/form',[\App\Http\Controllers\LivreController::class , 'index']);
Route::post('/form',[\App\Http\Controllers\LivreController::class , 'add']);

Route::middleware(['auth'])->group(function (){
    Route::get('/add_form', [\App\Http\Controllers\LogementController::class , 'addForm'])->name('add_logement');
    Route::get('/user/activation' , [\App\Http\Controllers\UsersController::class , 'activationForm'])->name('activationForm');
    Route::put('/user/activation/{user}' , [\App\Http\Controllers\UsersController::class , 'activation'])->name('activation');
});

Route::get('/accueil', [\App\Http\Controllers\LogementController::class , 'index'])->name('accueil');

//test
Route::get('/test' , [test::class  , 'index']);
Route::post('/test' , [test::class  , 'dd'])->name('test');

Route::post('/add_form', [\App\Http\Controllers\LogementController::class , 'add']);
Route::get('/show_logement', [\App\Http\Controllers\LogementController::class , 'show'])->name('show_logement');
Route::get('/edit/{logement}', [\App\Http\Controllers\LogementController::class , 'editForm'])->name('editForm');
Route::put('/edit/{logement}', [\App\Http\Controllers\LogementController::class , 'edit'])->name('edit');
Route::delete('/delete/{logement}', [\App\Http\Controllers\LogementController::class , 'delete'])->name('delete');
Route::get('/show/{logement}', [\App\Http\Controllers\LogementController::class , 'show_log'])->name('show');


//route pour la registration ,login d'un agent et l'activation de son compte par un admin
Route::post('/user/register', [\App\Http\Controllers\UsersController::class , 'register'])->name('register');
Route::get('/user/login' , [\App\Http\Controllers\UsersController::class , 'index'])->name('login');;
Route::post('/user/loginhandle', [\App\Http\Controllers\UsersController::class , 'loginhandle'])->name('loginhandle');
Route::get('/user/logout', [\App\Http\Controllers\UsersController::class , 'logout'])->name('logout');


Route::get('reponse_login' , [\App\Http\Controllers\UsersController::class , 'reponse_login']);

Route::post('/client', [\App\Http\Controllers\ClientController::class , 'client_handle'])->name('client_handle');
Route::get('/client/{id}', [\App\Http\Controllers\ClientController::class , 'client'])->name('client');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
