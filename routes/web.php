<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PremierController;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\ReservationController;

use App\Http\Controllers\ChevalController;
use App\Http\Controllers\ProprietaireController;

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
Route::get('/route', [PremierController::class, 'route'])->middleware('auth');

Route::get('/', function () {
    return view('accueil');
});

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/accueil', [PremierController::class, 'home']);

Route::get('/chambre', [ChambreController::class, 'store']);


Route::get('/failure', function () {
    return view('authentification');
})->name('failure');

Route::get('/newreservation', [ReservationController::class, 'create'])->middleware('auth');

Route::post('/storereservation', [ReservationController::class, 'store'])->name('reservation.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/deconnexion', function () {
    Auth::logout();
    return redirect('/accueil');
});

Route::get('/chambres', [ChambreController::class, 'index'])->middleware('auth');

Route::get('/chambres2', [ChambreController::class, 'indexPart2'])->middleware('auth');

Route::get('/categorie', [ChambreController::class, 'indexOneCategorie'])->name('categorie.indexOneCategorie')->middleware('auth');;
Auth::routes();

Route::post('/onecategoriereservation', [ReservationController::class, 'store'])->name('chambre.indexOneCategorie')->middleware('auth');;
Auth::routes();

Route::get('/disponibilites', [ChambreController::class, 'dispo'])->name('categorie.dispo')->middleware('auth');;

Route::get('/vueSurMer', [ChambreController::class, 'vueSurMer'])->middleware('auth');

Route::get('/addCategorie', [CategorieController::class, 'create'])->middleware('auth');

Route::post('/oneaddcategorie', [CategorieController::class, 'store'])->name('categorie.store')->middleware('auth');
Auth::routes();

Route::get('/prixDecroissant', [ChambreController::class, 'prixDecroissant'])->middleware('auth');

Route::get('/mentions', function () {
    return view('mentionLegale');
});
