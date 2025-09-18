<?php

use App\Http\Controllers\InstrumentoAvaliativoController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

// // ACESS - COORDINATOR
// Route::middleware([AuthMiddleware::class])->prefix('coordinator')->group(function() {

//     // CREATE
//     Route::post('/instrumentos-avaliativos/criar', [InstrumentoAvaliativoController::class, 'createInstrumentoAvaliativo'])->name('create-instrumentoavaliativo');
    
//     // UPDATE - SEND ID
//     Route::put('/instrumentos-avaliativos/update/{id}', action: [InstrumentoAvaliativoController::class, 'updateInstrumentoAvaliativo'])->name('update-instrumentoavaliativo');

//     // GET
//     Route::get('/instrumentos-avaliativos/get', [InstrumentoAvaliativoController::class, 'getInstrumentoAvaliativo'])->name('get-instrumentoavaliativo');

//     // GET - BY NAME
//     Route::get('/instrumentos-avaliativos/get/{name}', [InstrumentoAvaliativoController::class, 'getInstrumentoAvaliativoByName'])->name('get-instrumentoavaliativobyname');

// });