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

Route::get('/', [IndexContoller::class, 'index'])->name('home.index');
Route::get('/owners', [OwnerController::class, 'index'])->name('owners.index');
Route::get('/pets', [PetController::class, 'index'])->name('pets.index');
Route::get('/pets/{id}', [PetController::class, 'show'])->name('pets.show');
