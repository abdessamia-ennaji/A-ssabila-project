<?php
namespace App\Http\Controllers;

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

// //CHAUFFEUR
Route::get('/ajouter/chauffeur',[ChauffeurController::class,'index']);
Route::get('/liste/chauffeur', [ChauffeurController::class, 'liste'])->name('liste.chauffeur');
Route::post('/enregistrer/chauffeur',[ChauffeurController::class,'store'])->name('store.chauffeur');
Route::get('/supprimer-chauffeur/{id}',[ChauffeurController::class, 'destroy'])->name('delete-chauffeur');
Route::get('/editer-chauffeur/{id}', [ChauffeurController::class, 'edit'])->name('edit-chauffeur');
Route::post('/modifier/chauffeur/{id}', [ChauffeurController::class, 'update'])->name('update.chauffeur');



// //ESCORTE
Route::get('/ajouter/escorte',[EscorteController::class,'index']);
Route::get('/liste/escorte', [EscorteController::class, 'liste'])->name('liste.escorte');
Route::post('/enregistrer/escorte',[EscorteController::class,'store'])->name('store.escorte');
Route::get('/supprimer-escorte/{id}',[EscorteController::class, 'destroy'])->name('delete-escorte');
Route::get('/editer-escorte/{id}', [EscorteController::class, 'edit'])->name('edit-escorte');
Route::post('/modifier/escorte/{id}', [EscorteController::class, 'update'])->name('update.escorte');


// //RECLAMATION
Route::get('/ajouter/reclamation',[ReclamationController::class,'index']);
Route::get('/liste/reclamation', [ReclamationController::class, 'liste'])->name('liste.reclamation');
Route::post('/enregistrer/reclamation',[ReclamationController::class,'store'])->name('store.reclamation');
Route::get('/supprimer-reclamation/{id}',[ReclamationController::class, 'destroy'])->name('delete-reclamation');
Route::get('/editer-reclamation/{id}', [ReclamationController::class, 'edit'])->name('edit-reclamation');
Route::post('/modifier/reclamation/{id}', [ReclamationController::class, 'update'])->name('update.reclamation');
Route::get('/show-reclamation/{id}', [ReclamationController::class, 'show'])->name('show-reclamation');


//TRANSPORT
Route::get('/ajouter/transport',[TransportController::class,'index']);
Route::get('/liste/transport', [TransportController::class, 'liste'])->name('liste.transport');
Route::post('/enregistrer/transport',[TransportController::class,'store'])->name('store.transport');
Route::get('/supprimer-transport/{id}',[TransportController::class, 'destroy'])->name('delete-transport');
Route::get('/editer-transport/{id}', [TransportController::class, 'edit'])->name('edit-transport');
Route::get('/show-transport/{id}', [TransportController::class, 'show'])->name('show-transport');
Route::post('/modifier/transport/{id}', [TransportController::class, 'update'])->name('update.transport');



// //arriveedepart
Route::get('/ajouter/arriveedepart', [ArriveeDepartController::class,'index']);
Route::get('/liste/arriveedepart', [ArriveeDepartController::class, 'liste'])->name('liste.arriveedepart');
Route::post('/enregistrer/arriveedepart',[ArriveeDepartController::class,'store'])->name('store.arriveedepart');
Route::get('/supprimer-arriveedepart/{id}',[ArriveeDepartController::class, 'destroy'])->name('delete-arriveedepart');
Route::get('/editer-arriveedepart/{id}', [ArriveeDepartController::class, 'edit'])->name('edit-arriveedepart');
Route::post('/modifier/arriveedepart/{id}', [ArriveeDepartController::class, 'update'])->name('update.arriveedepart');


// //Kilometrage
Route::get('/ajouter/kilometrage', [KilometrageController::class,'index']);//
Route::get('/liste/kilometrage', [KilometrageController::class, 'liste'])->name('liste.kilometrage');
Route::post('/enregistrer/kilometrage',[KilometrageController::class,'store'])->name('store.kilometrage');//
Route::get('/supprimer-kilometrage/{id}',[KilometrageController::class, 'destroy'])->name('delete-kilometrage');
Route::get('/editer-kilometrage/{id}', [KilometrageController::class, 'edit'])->name('edit-kilometrage');
Route::post('/modifier/kilometrage/{id}', [KilometrageController::class, 'update'])->name('update.kilometrage');



//Quantite
Route::get('/quantite/produit', [QuantiteController::class, 'liste_produit'])->name('liste_produit.produit');
Route::get('/quantite/commande', [QuantiteController::class, 'liste_commande'])->name('liste_commande.commande');





//PDF
Route::get('/transport/{id}/pdf', [TransportController::class, 'generatePdf'])->name('transport.pdf');
Route::get('/reclamation/{id}/pdf', [ReclamationController::class, 'generatePdf'])->name('reclamation.pdf');
