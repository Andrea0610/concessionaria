<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

// Route::get('/', [HomeController::class,'index']);

/*
 * Visualizzo la home page utente
 */
Route::get('/', function () {
    return view('layout.index');
});

/**
 * Rotta per la pagina del VEICOLO
 * Eliminare il link VEICOLO dall'header
 */
Route::get('/veicolo', function () {
    return view('veicolo');
});

// Rotta per la pagina dei VEICOLI
Route::get("/veicoli", function () {
    return view('veicoli');
});


/*
Route::get('/user', function () {
    return [
        'andrea',
        'pagnani'
    ];
});
*/

Route::get('/admin', function () {
    return view('admin');
});



