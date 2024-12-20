<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\TrainStationController;
use App\Http\Controllers\TicketController;
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


Route::get('/', [TrainController::class, 'index'])->name('home');
Route::get('/passengers', [PassengerController::class, 'index'])->name('passengers.index');
Route::get('/train-stations', [TrainStationController::class, 'index'])->name('train-stations.index');
Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
