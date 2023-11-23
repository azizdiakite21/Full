<?php

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ColisController;
use App\Http\Controllers\LigneController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehiculeController;
use Illuminate\Support\Facades\Auth;
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



// Routes de la barre de navigation

Route::get('/', function () {
    return view('welcome');
})->name('accueil');

Route::get('/envoi-des-colis', function (){
    return view('customersViews.colis');
})->name('colis');

Route::get('/contactez-nous', function (){
    return view('customersViews.contact');
})->name('contact');

Route::get('/info-colis', function (){
    return view('customersViews.infoColis');
});





Route::middleware(['auth'])->group(function(){


//Routes pour conernant les vehicules

Route::get('home/gestion-des-vehicules', [VehiculeController::class, 'index'])->name('listeVehicules');

Route::get('home/gestion-des-vehicules/ajout-vehicule', [VehiculeController::class, 'create'])->name('planificationVehicule');

Route::post('home/gestion-des-vehicules/ajout-vehicule', [VehiculeController::class, 'store'])->name('enregistrementVehicule');

Route::post('/home/bus/listes-des-bus/supp/{vehicule}', [App\Http\Controllers\VehiculeController::class, 'destroy'])->name('suppVehicule');

Route::post('/home/bus/listes-des-bus/{vehicule}', [App\Http\Controllers\VehiculeController::class, 'update'])->name('majVehicule');

Route::get('home/gestion-des-vehicules/edition-vehicule/{vehicule}', [VehiculeController::class, 'edit'])->name('editerVehicule');





// Routes concernants les colis coté administrateur

Route::get('/home/gestion-des-colis/affectation-colis', [ColisController::class, 'affectation_colis'])->name('affectationColis');

Route::get('/home/gestion-des-colis/liste-des-colis', [ColisController::class, 'index'])->name('listeColis');

Route::get('/home/gestion-des-colis/enregistrement-informations-colis', [ColisController::class, 'create'])->name('enregistrementColis');

Route::get('home/gestion-des-colis/paiement-colis', [ColisController::class, 'paiement'])->name('paiementColis');

Route::post('home/gestion-des-colis/enregistrement', [ColisController::class, 'store'])->name('confirmationColis');

Route::post('home/gestion-des-colis/ticket-client', [ColisController::class, 'generationTicket'])->name('ticketColis');

Route::view('home/gestion-des-colis/confirmation', 'administrationViews.colis.confirmation')->name('confirmation');

Route::post('home/gestion-des-colis/suppressionColis/{colis}', [ColisController::class, 'destroy'])->name('suppressionColis');

Route::get('home/gestion-des-colis/modification/{colis}', [ColisController::class, 'edit'])->name('editionColis');

Route::post('home/gestion-des-colis/modification/{colis}', [ColisController::class, 'update'])->name('modificationColis');






// Routes concernant les lignes coté administrateur

Route::get('/home/gestion-des-lignes/liste-des-lignes', [LigneController::class, 'index'])->name('listeLignes');

Route::get('/home/gestion-des-lignes/ajout-ligne', [LigneController::class, 'create'])->name('ajoutLigne');

Route::post('home/gestion-des-lignes/enregistrement', [LigneController::class, 'store'])->name('enregistrementLigne');

Route::get('/home/gestion-des-lignes/edition/{ligne}', [LigneController::class, 'edit'])->name('editionLigne');

Route::post('home/gestion-des-lignes/mise-a-jour/{ligne}', [LigneController::class, 'update'])->name('mise_a_jour_ligne');

Route::post('home/gestion-des-lignes/suppression/{ligne}', [LigneController::class, 'destroy'])->name('suppressionLigne');





// Routes concernant les utilisateurs coté administrateur

Route::get('/home/gestion-des-utilisateurs/liste-des-utilisateurs', [UserController::class, 'index'])->name('listeUsers');

Route::get('/home/gestion-des-utilisateurs/ajout-utilisateur', [UserController::class, 'create'])->name('ajoutUser');


Route::get('/home/gestion-des-utilisateurs/edition/{user}', [UserController::class, 'edit'])->name('editionUser');

Route::post('home/gestion-des-utilisateurs/mise-a-jour/{user}', [UserController::class, 'update'])->name('mise_a_jour_utilisateur');

Route::post('home/gestion-des-utilisateurs/suppression/{user}', [UserController::class, 'destroy'])->name('suppressionUser');

Route::get('home/gestion-des-utilisateurs/changer-mot-de-passe/{user}', [UserController::class, 'changePasswordForm'])->name('changerMotDePasse');

Route::post('home/gestion-des-utilisateurs/changer-mot-de-passe/{user}', [UserController::class, 'setUserPassword'])->name('changePassword');



// Routes concernant les tickets coté administrateur

Route::get('/home/tickets/listes-des-tickets', [TicketController::class, 'index'])->name('listeTickets');

Route::post('/home/tickets/listes-des-tickets/{ticket}', [TicketController::class, 'destroy'])->name('suppressionTicket');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Routes concernant les voyages coté administrateur

Route::get('/home/gestion-des-voyages/liste-des-voyages', [VoyageController::class, 'afficherVoyage'])->name('listeVoyages');

Route::get('/home/gestion-des-voyages/planification-voyage', [VoyageController::class, 'create'])->name('planificationVoyage');

Route::post('/home/gestion-des-voyages/enregistrement', [VoyageController::class, 'store'])->name('enregistrementVoyage');

Route::get('/home/gestion-des-voyages/edition/{voyage}', [VoyageController::class, 'edit'])->name('editionVoyage');

Route::post('home/gestion-des-voyages/mise-a-jour/{voyage}', [VoyageController::class, 'update'])->name('mise_a_jour_voyage');

Route::post('home/gestion-des-voyages/suppression/{voyage}', [VoyageController::class, 'destroy'])->name('suppressionVoyage');




});







// Routes concernant les lignes (coté client)

Route::get('/achat-ticket', [\App\Http\Controllers\VoyageController::class, 'index'])->name('lignes');




// Route concernant les colis (coté client)

Route::get('/info-colis/statut', [ColisController::class, 'show'])->name('statut');



// Routes concernant les tickets (coté client)

Route::get('/achat-ticket/infos-voyage/bus={vehicule}/voyage={voyage}/ligne={ligne}', [TicketController::class, 'create'])->name('ticketform1');

Route::get('/achat-ticket/enregistrement-passagers/bus={vehicule}/voyage={voyage}/ligne={ligne}', [TicketController::class, 'enregistrement'])->name('ticketform2');

Route::get('/achat-ticket/paiement/bus={vehicule}/voyage={voyage}/ligne={ligne}/nbrepassagers={nbrepassagers}', [TicketController::class, 'paiement'])->name('ticketform3');

Route::post('/achat-ticket/paiement/voyage={voyage}/ligne={ligne}/nbrepassagers={nbrepassagers}', [TicketController::class, 'store'])->name('enregistrementTicket');

Route::get('/achat-ticket/telechargement-tickets/{ticket}', [TicketController::class, 'downloadPDF'])->name('download-ticket');

Route::view('/achat-ticket/end', 'forms_achat_tickets.confirmation')->name('fin_achats');





Auth::routes();
