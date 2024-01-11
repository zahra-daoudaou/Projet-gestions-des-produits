<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gestionProduitController;


Route::get('/modifier', [gestionProduitController::class, 'update']);
Route::get('/form', [gestionProduitController::class, 'create']);
Route::get('/{nom}', [gestionProduitController::class, 'index']);
Route::resource('produits', gestionProduitController::class);

















/*
Route::get('/produits/{nom?}/Acueil', function ($nom='produits') {
    return 'welcome' .$nom;
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function () {
    return '<h4> about page </h4>';
});

Route::get('{n}', function($n) {
    return 'Je suis la page ' . $n . ' !';
    });
*/

/*
Route::get('/stagiare/{stagiare}', function($stagiare) {
    return 'le nom du stagiaire : ' . $stagiare . ' !';
});

Route::get('/class/{class}/stagiare/{stagiare}', function($class, $stagiare){
    return 'le nom du stagiaire : ' . $stagiare . ', appartient à 
    la classe : ' . $class . ' ! ';
});
*/