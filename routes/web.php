<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexContoller;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PetController;

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

// Route::get('/', function () {
//     return view('navigation');
// });

Route::get('/', [IndexContoller::class, 'searchPet'])->name('home.index');
Route::get('/owners', [OwnerController::class, 'index'])->name('owners.index');
Route::get('/owners/{id}', [OwnerController::class, 'owner'])->name('owners.owner');
Route::get('/pets', [PetController::class, 'index'])->name('pets.index');
Route::get('/pets/{id}', [PetController::class, 'show'])->name('pets.show');

Route::get('/pets/{id}/edit', [PetController::class, 'edit'])->name('pets.edit');
Route::get('/pets/detail/{movie_id}', [PetController::class, 'detail'])->whereNumber('pets_id')->name('pets.detail');
Route::get('/pets/create', [PetController::class, 'create'])->name('pets.create');
Route::put('/pets/{id}', [PetController::class, 'update'])->name('pets.update');
Route::post('/pets', [PetController::class, 'store'])->name('pets.store');
Route::delete('/pets/{id}', [PetController::class, 'delete'])->name('pets.delete');
