<?php

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

Route::get('/accueil', [\App\Http\Controllers\LogementController::class , 'index']);

Route::get('/add_form', [\App\Http\Controllers\LogementController::class , 'addForm']);
Route::post('/add_form', [\App\Http\Controllers\LogementController::class , 'add']);
Route::get('/show_logement', [\App\Http\Controllers\LogementController::class , 'show']);
Route::get('/edit/{logement}', [\App\Http\Controllers\LogementController::class , 'editForm'])->name('editForm');
Route::put('/edit/{logement}', [\App\Http\Controllers\LogementController::class , 'edit'])->name('edit');
Route::delete('/delete/{logement}', [\App\Http\Controllers\LogementController::class , 'delete'])->name('delete');
Route::get('/show/{logement}', [\App\Http\Controllers\LogementController::class , 'show_log'])->name('show');


//route pour la registration ,login d'un agent et l'activation de son compte par un admin
Route::post('/user/register', [\App\Http\Controllers\UsersController::class , 'register'])->name('register');
Route::post('/user/login', [\App\Http\Controllers\UsersController::class , 'login'])->name('login');
Route::get('/user/logout', [\App\Http\Controllers\UsersController::class , 'logout'])->name('logout');
Route::get('/user/activation' , [\App\Http\Controllers\UsersController::class , 'activationForm'])->name('activationForm');
Route::put('/user/activation/{user}' , [\App\Http\Controllers\UsersController::class , 'activation'])->name('activation');

Route::get('reponse_login' , [\App\Http\Controllers\UsersController::class , 'reponse_login']);
