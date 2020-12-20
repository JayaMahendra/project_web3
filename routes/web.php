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
//projekkkkk
use App\Http\Controllers\BioController;
Route::get('/biography/home',[BioController::class, 'home']);
Route::get('/biography/heroes',[BioController::class, 'heroes']);
Route::get('/biography/about',[BioController::class, 'about']);
Route::get('/biography/book',[BioController::class, 'book']);

Route::get('/biography/hdetail/{id}',[BioController::class, 'hdetail'])->name('b.detail');
Route::get('/biography/bdetail/{id}',[BioController::class, 'bdetail']);

//admin
Route::group(['middleware' => 'admin'], function() {
    Route::get('/admin/ahome',[BioController::class, 'ahome']);
    Route::get('/admin/abook',[BioController::class, 'abook']);
    Route::get('/admin/userr',[BioController::class, 'userr']);
    Route::get('/admin/aheroes',[BioController::class, 'aheroes']);
    Route::get('/admin/edit/{id}',[BioController::class, 'edit']);
    Route::post('/admin/update',[BioController::class, 'update']);
    Route::get('/admin/editb/{id}',[BioController::class, 'editb']);
    Route::post('/admin/updateb',[BioController::class, 'updateb']);
    Route::delete('/admin/userr/destroy/{user}',[BioController::class, 'destroy'])->name('userr.destroy');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();