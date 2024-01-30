<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\UtilisateurController;




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

Route::get('/', function () {
    return view('auth.login');
});

Route ::get('/Home', [App\Http\Controllers\HomeController::class, 'index'])->name('Home');
Route::get('/Classes', [App\Http\Controllers\ClasseController::class, 'index'])->name('Classes');
Route::get('/Eleves', [App\Http\Controllers\EleveController::class, 'index'])->name('Eleves');


Route::post('/Classes', [ClasseController::class, 'store'])->name('classes.store');
Route::get('/Classes/{classe}/edit', [ClasseController::class, 'edit'])->name('classes.edit');
Route::put('/Classes/{classe}', [ClasseController::class, 'update'])->name('classes.update');
Route::delete('/Classes/{classe}', [ClasseController::class, 'destroy'])->name('classes.destroy');
Route::get('/classes/{classe}', 'ClasseController@show')->name('classes.show');



// Routes pour l'authentification
Route::get('/login', [UtilisateurController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UtilisateurController::class, 'login']);
Route::get('/register', [UtilisateurController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UtilisateurController::class, 'register']);
Route::post('/logout', [UtilisateurController::class, 'logout'])->name('logout');
Route::post('/process-login', [UtilisateurController::class, 'processLogin']); // Renommer cette route pour éviter la duplication


// Routes pour les opérations CRUD d'utilisateurs
Route::middleware(['auth'])->group(function () {
    // ... autres routes pour les opérations CRUD d'utilisateurs
    Route::get('/utilisateurs', [UtilisateurController::class, 'index'])->name('utilisateurs.index');
    Route::get('/utilisateurs/create', [UtilisateurController::class, 'create'])->name('utilisateurs.create');
    Route::post('/utilisateurs', [UtilisateurController::class, 'store'])->name('utilisateurs.store');
    Route::get('/utilisateurs/{utilisateur}', [UtilisateurController::class, 'show'])->name('utilisateurs.show');
    Route::get('/utilisateurs/{utilisateur}/edit', [UtilisateurController::class, 'edit'])->name('utilisateurs.edit');
    Route::put('/utilisateurs/{utilisateur}', [UtilisateurController::class, 'update'])->name('utilisateurs.update');
    Route::delete('/utilisateurs/{utilisateur}', [UtilisateurController::class, 'destroy'])->name('utilisateurs.destroy');
});


// Routes pour les élèves
Route::get('/eleves/{eleve}/edit', [EleveController::class, 'edit'])->name('eleves.edit');
Route::get('/eleves', [EleveController::class, 'show'])->name('eleves.show');
Route::post('/eleves', [EleveController::class, 'store'])->name('eleves.store');
Route::get('/eleves/create', 'EleveController@create')->name('Eleves.create');
Route::get('/eleves/create', [EleveController::class, 'create'])->name('Eleves.create');
Route::put('/eleves/{id}', [EleveController::class, 'update'])->name('eleves.update');
Route::get('/eleves', 'EleveController@index')->name('Eleves.index');





