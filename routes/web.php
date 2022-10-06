<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;
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
//les routes de la administrateur
route::get('/index',[AdminController::class,'index']);
route::post('/store',[AdminController::class,'store'])->name('admin.store');

route::get('/dashboard',[DashboardController::class,'index']);
//route categorie
route::get('/ajouterCategorie',[CategorieController::class,'index'])->name('ajouterCategorie');
route::post('/sauveCategorie',[CategorieController::class,'store'])->name('sauvecategorie');
//route prouits
route::get('/ajouterproduit',[ProduitController::class,'index'])->name('ajouterproduit');
route::post('/sauveproduit',[ProduitController::class,'store'])->name('sauveproduit');