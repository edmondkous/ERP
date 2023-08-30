<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VendeurController;
use App\Http\Controllers\ProduitController;







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

Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/register',[AuthController::class, 'registerPost'])->name('register');
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'loginPost'])->name('login');





Route::group(['middleware'=>'auth'], function(){

    Route::get('dashboard',[AppController::class, 'index'])->name('dashboard');

    Route::prefix('clients')->group(function(){
        Route::get('/',[ClientController::class, 'index'])->name('clients.index');
        Route::get('/create',[ClientController::class, 'create'])->name('clients.create');
        Route::post('/create',[ClientController::class, 'store'])->name('clients.store');
        Route::get('/edit',[ClientController::class, 'edit'])->name('clients.edit');
        Route::get('/search',[ClientController::class, 'search'])->name('clients.search');


        Route::get('/downloadPDF',[ClientController::class, 'downloadPDF'])->name('clients.pdf_client');


    });

    Route::prefix('produits')->group(function(){
        Route::get('/',[ProduitController::class, 'index'])->name('produits.index');
        Route::get('/create',[ProduitController::class, 'create'])->name('produits.create');
        Route::post('/create',[ProduitController::class, 'store'])->name('produits.store');
        Route::get('/edit',[ProduitController::class, 'edit'])->name('produits.edit');

    });


    Route::prefix('vendeurs')->group(function(){
        Route::get('/',[VendeurController::class, 'index'])->name('vendeurs.index');
        Route::get('/create',[VendeurController::class, 'create'])->name('vendeurs.create');
        Route::post('/create',[VendeurController::class, 'store'])->name('vendeurs.store');

        Route::get('/edit',[VendeurController::class, 'edit'])->name('vendeurs.edit');

    });

});







/*Route::get('dashboard',[AppController::class, 'index'])->name('dashboard');

Route::prefix('clients')->group(function(){
    Route::get('/',[ClientController::class, 'index'])->name('clients.index');
    Route::get('/create',[ClientController::class, 'create'])->name('clients.create');
    Route::post('/create',[ClientController::class, 'store'])->name('clients.store');
    Route::get('/edit',[ClientController::class, 'edit'])->name('clients.edit');

});

Route::prefix('vendeurs')->group(function(){
    Route::get('/',[VendeurController::class, 'index'])->name('vendeurs.index');
    Route::get('/create',[VendeurController::class, 'create'])->name('vendeurs.create');
    Route::post('/create',[VendeurController::class, 'store'])->name('vendeurs.store');

    Route::get('/edit',[VendeurController::class, 'edit'])->name('vendeurs.edit');
});*/
