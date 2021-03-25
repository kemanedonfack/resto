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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('todos', 'TodoController');

//route pour la gestion de menu du che cuisinier

Route::get('/gestionMenuCuisinier/GestionMenuCuisinier.blade', 'GestionMenuCuisinierController@index')->name('GestionMenuCuisiniers');


//la route pour le dashboard du cuisinier
Route::get("/dashboard", "DashboardController@index")->name("dashboard.index");

Route::get('/commande', function () {
    return view('chef.commande.commande');
});

Route::get('/commande-detail', function () {
    return view('chef.commande.details');
});

Route::get('/chef-menu', function () {
    return view('chef.menu.menu');
});

Route::get('/add', function () {
    return view('chef.menu.add');
});

Route::get('/chef', function () {
    return view('chef.dashboard');
});

Route::get('/connexion', function () {
    return view('auth.connexion');
});