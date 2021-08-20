<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CharacterController;

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

// NAVIGATION ROUTES
Route::get('/', [NavController::class, 'home']);
Route::get('characters', [NavController::class, 'characters']);
Route::get('character/{id}', [NavController::class, 'character']);
Route::get('addCharacter', [NavController::class, 'addCharacter']);
Route::post('updateCharacter', [NavController::class, 'updateCharacter']);
Route::get('artists', [NavController::class, 'artists']);
Route::get('artist/{id}', [NavController::class, 'artist']);
Route::get('addArtist', [NavController::class, 'addArtist']);
Route::post('updateArtist', [NavController::class, 'updateArtist']);

// ROUTES WITH ACTIONS
Route::post('addCharacter', [CharacterController::class, 'addCharacter']);
Route::post('deleteCharacter', [CharacterController::class, 'deleteCharacter']);
Route::post('updateCharacter/{id}', [CharacterController::class, 'updateCharacter']);
Route::post('addArtist', [ArtistController::class, 'addArtist']);
Route::post('deleteArtist', [ArtistController::class, 'deleteArtist']);
Route::post('updateArtist/{id}', [ArtistController::class, 'updateArtist']);