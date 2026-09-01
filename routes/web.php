<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\NiveauScolaireController;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/etudiant', [EtudiantController::class, 'index'])->name('etudiant');
Route::get('/etudiant/create', [EtudiantController::class, 'create'])->name('etudiant.create');
// Route::get('/etudiant/edit', [EtudiantController::class, 'edit'])->name('etudiant.edit');

Route::get('/niveauscolaire', [NiveauScolaireController::class, 'index'])->name('niveauscolaire');
// Route::get('/niveauscolaire/create', [NiveauScolaireController::class, 'create'])->name('niveauscolaire.create');
// Route::get('/niveauscolaire/edit', [NiveauScolaireController::class, 'edit'])->name('niveauscolaire.edit');