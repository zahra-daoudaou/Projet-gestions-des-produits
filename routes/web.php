<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gestionProduitController;






Route::delete('produits/{produit}/destroy', [gestionProduitController::class, 'destroy'])->name('produits.destroy');
Route::put('produits/{produit}/update', [gestionProduitController::class, 'update'])->name('produits.update');
Route::get('produits/{produit}/modifier', [gestionProduitController::class, 'edit'])->name('produits.edit');
Route::get('produits/store', [gestionProduitController::class, 'store'])->name('produits.store');
Route::get('produits/form', [gestionProduitController::class, 'create']);
Route::get('produits/index', [gestionProduitController::class, 'index'])->name('produits.index');


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