<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BodyController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AnatomyController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SymptomController;
use App\Http\Controllers\FavoriteController;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', function() {
    return view('profile');
});
// Backend
Route::group(['prefix' => 'admin', 'middleware' => ['auth','isAdmin']], function () {
    Voyager::routes();
});


//route homepage

// Anatomy Route
Route::get('/anatomy', [AnatomyController::class, 'index'])->middleware('auth');
Route::get('/anatomy/{id}', [AnatomyController::class, 'anatomy']);

//Disease Route
Route::get('/man', [DiseaseController::class, 'manindex']);
Route::get('/woman', [DiseaseController::class, 'womanindex']);
Route::get('/children', [DiseaseController::class, 'childrenindex']);
Route::get('/elder', [DiseaseController::class, 'elderindex']);
Route::get('/everybody', [DiseaseController::class, 'everybodyindex']);
Route::get('/disease', [DiseaseController::class, 'diseaseindex']);
Route::get('/disease/{id}', [DiseaseController::class, 'disease']);

// body Route
Route::get('/body', [BodyController::class, 'body']);
Route::get('/listbody', [BodyController::class, 'allbody']);
Route::get('/body/{name}', [BodyController::class, 'bodylist']);

//symptom Route
Route::get('/symptom', [SymptomController::class, 'symptompart']);

// Search Route
Route::get('/search', [SearchController::class, 'indexSearch']);
Route::get('/symptom', [SearchController::class, 'symptomsearch']);

// Favorite Route
Route::middleware('requestlogin')->group(function(){
    Route::get('/favorite', [FavoriteController::class, 'favoritelist']);
  });  

Route::post('/addfavorite', [FavoriteController::class, 'addfavorite']);
