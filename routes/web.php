<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\CritereController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UniversityController;
use Illuminate\Support\Facades\Route;

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



    return view('welcome');
});
Route::post('/logout', 'Auth\AuthenticatedSessionController@destroy')
    ->name('logout');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pageUniversite',[UniversityController::class, 'AffichageUniversite'])->name('AffichageUniv');


Route::get('/formulaire/crer', function () {
    return view('Formulaire');
})->name('formulaire');

Route::get('/Critere/crer', function () {
    return view('FormulaireCritere');
})->name('FormulaireCritere');

Route::get('/Commentaire/list', function () {
    return view('Comment');
})->name('CommentaireList');

Route::get('/Classement/list', function () {
    return view('Classement');
})->name('ClassementList');

Route::post('/formulaire/crer/save',[UniversityController::class, 'store'])->name('FormulaireSave');
Route::get('/Universite/List',[UniversityController::class, 'list'])->name('listUniv');
Route::post('/Critere/crer/save',[CritereController::class, 'store'])->name('CritereSave');
Route::get('/Critere/List',[CritereController::class, 'RecupCritere'])->name('CritereList');
Route::get('/Commentaire/list',[CommentController::class, 'getComments'])->name('CommentaireList');
Route::delete('/Universite/List/{id}', [UniversityController::class, 'destroy'])->name('universiteDestroy');
Route::delete('/Critere/List/{id}', [CritereController::class, 'destroy'])->name('critereDestroy');
Route::post('/submitRatings', [UniversityController::class, 'submitRatings'])->name('submitRatings');
Route::post('/submit', [CommentController::class, 'store'])->name('submit');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
