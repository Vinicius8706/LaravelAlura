<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\TemporadasController;

Route::get('series', [SeriesController::class, 'index'])->name('listar_series')->middleware('auth');
Route::get('series/criar', [SeriesController::class, 'create'])->name('form_criar_serie');
Route::post('series/criar', [SeriesController::class, 'store']);
Route::delete('/series/remover/{id}', [SeriesController::class, 'destroy']);
Route::post('series/{id}/editaNome', [SeriesController::class, 'editaNome']);
Route::get('/series/{serieId}/temporadas', [TemporadasController::class, 'index']);
Route::get('temporadas/{temporada}/episodios', [EpisodiosController::class, 'index']);
Route::post('temporadas/{temporada}/assistir', [EpisodiosController::class, 'assistir']);