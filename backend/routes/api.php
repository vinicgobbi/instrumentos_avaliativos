<?php

use App\Http\Controllers\InstAvaCategoriaController;
use App\Http\Controllers\InstrumentoAvaliativoController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware([AuthMiddleware::class])
    ->prefix('coordinator')
    ->group(function () {

    // Instrumentos Avaliativos
    Route::prefix('instrumentos-avaliativos')
        ->name('instrumentos.')
        ->controller(InstrumentoAvaliativoController::class)
        ->group(function () {
            Route::post('/', 'createInstrumentoAvaliativo')->name('store');
            Route::put('/{id}', 'updateInstrumentoAvaliativo')->name('update');
            Route::get('/', 'getInstrumentoAvaliativo')->name('index');
            Route::get('/nome/{name}', 'getInstrumentoAvaliativoByName')->name('showByName');
            Route::delete('/{id}', 'deleteInstrumentoAvaliativo')->name('destroy');
        });

    // Categorias
    Route::prefix('categorias')
        ->name('categorias.')
        ->controller(InstAvaCategoriaController::class)
        ->group(function () {
            Route::post('/', 'createInstAvaCategoria')->name('store');
            Route::put('/{id}', 'updateInstAvaCategoria')->name('update');
            Route::get('/', 'getInstAvaCategoria')->name('index');
            Route::get('/nome/{name}', 'getInstAvaCategoriaByName')->name('showByName');
            Route::delete('/{id}', 'deleteInstAvaCategoria')->name('destroy');
        });
});
