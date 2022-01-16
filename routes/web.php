<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/accueil',[PremierController::class, 'home'] );

Route::get('/chambre',[ChambreController::class, 'store'] );


Route::get('/failure',function () {
    return view('authentification');
})->name('failure');

Route::get('/newreservation',[ReservationController::class, 'create'] )->middleware('auth');

Route::post('/storereservation',[ReservationController::class, 'store'] )->name('reservation.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/deconnexion',function () {
    Auth::logout();
     return redirect('/accueil');
});

Route::get('/chambres',[ChambreController::class, 'index'] )->middleware('auth');

Route::get('/chambres2',[ChambreController::class, 'index2'] )->middleware('auth');

// Route::get('/newcheval',[ChevalController::class, 'create'] );

// Route::post('/storecheval',[ChevalController::class, 'store'] )->name('cheval.store');
// Auth::routes();

// Route::get('/newproprietaire',[ProprietaireController::class, 'create'] );

Route::get('/categorie',[ChambreController::class, 'indexOneCategorie'] )->middleware('auth');

Route::post('/onecategoriereservation',[ReservationController::class, 'store'] )->name('chambre.indexOneCategorie');
Auth::routes();

// Route::get('/disponibilites',[ChambreController::class, 'create'] );
