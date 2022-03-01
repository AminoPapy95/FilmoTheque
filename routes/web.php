<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\RepresentationController;


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
    return view('master');
})->name('home');

Route::get('/template', function () {
    return view('template.master');
})->name('template');

Route::get('/bref', function () {
    return view('template.bref.index');
})->name('bref');

// ROUTE ARTIST
Route::get('/artist', [ArtistController::class, 'index'])->name('artist_index');

Route::get('/artist/{id}', [ArtistController::class, 'show'])->where('id', '[0-9]+')->name('artist_show');

Route::get('/artist/edit/{id}', [App\Http\Controllers\ArtistController::class, 'edit'])
	->where('id', '[0-9]+')->name('artist_edit');

Route::put('/artist/{id}', [App\Http\Controllers\ArtistController::class, 'update'])
	->where('id', '[0-9]+')->name('artist_update');


//ROUTE TYPE
Route::get('/type', [TypeController::class, 'index'])->name('type_index');

Route::get('/type/{id}', [TypeController::class, 'show'])
		->where('id', '[0-9]+')->name('type_show');

//ROUTE LOCALITY
Route::get('/locality', [LocalityController::class, 'index']) ->name('locality_index');

Route::get('/locality/{id}', [LocalityController::class, 'show'])
		->where('id', '[0-9]+')->name('locality_show');

//ROUTE ROLE
Route::get('/role', [RoleController::class, 'index'])->name('role_index');

Route::get('/role/{id}', [RoleController::class, 'show'])
		->where('id', '[0-9]+')->name('role_show');

//ROUTE LOCATION
Route::get('location', [LocationController::class, 'index'])->name('location_index');

Route::get('location/{id}', [LocationController::class, 'show'])
->where('id', '[0-9]+')->name('location_show');

//ROUTE SHOW
Route::get('/show', [ShowController::class, 'index'])->name('show_index');

Route::get('/show/{id}', [ShowController::class, 'show'])
->where('id', '[0-9]+')->name('show_show');

//ROUTE REPRESENTATION
Route::get('/representation', [RepresentationController::class, 'index'])
->name('representation_index');

Route::get('/representation/{id}', [RepresentationController::class, 'show'])
->where('id', '[0-9]+')->name('representation_show');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
