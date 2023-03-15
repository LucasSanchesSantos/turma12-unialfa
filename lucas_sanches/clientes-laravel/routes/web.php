<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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

Route::get ('/clients', [ClientController::class, 'index'])-> name('clients.index');
Route::get('/clients/create',[ClientController::class,'create'])->name('clients.create');
Route::get ('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');
Route::get ('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');


Route::post('/clients', [ClientController::class, 'store'])-> name('clients.store');

Route::get ('/produtos', [ClientController::class, 'index'])-> name('produtos.index');
Route::get('/produtos/create',[ClientController::class,'create'])->name('produtos.create');
Route::get ('/produtos/{id}', [ClientController::class, 'show'])->name('produtos.show');
Route::post('/produtos', [ClientController::class, 'store'])-> name('produtos.store');


Route::put('/clients/{id}',[ClientController::class,'update'])->name('clients.update');

