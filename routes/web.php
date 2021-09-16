<?php

use Illuminate\Support\Facades\Route;

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

Route::name('home')->get('/', [\App\Http\Controllers\HomeController::class, 'show']);

Route::name('notes.create')->get('/notes/create', [\App\Http\Controllers\NoteController::class, 'create']);

Route::name('notes.store')->post('/notes', [\App\Http\Controllers\NoteController::class, 'store']);

Route::name('notes.edit')->get('/notes/{note}/edit', [\App\Http\Controllers\NoteController::class, 'edit']);

Route::name('notes.patch')->patch('/notes/{note}', [\App\Http\Controllers\NoteController::class, 'update']);

Route::name('notes.index')->get('/notes', [\App\Http\Controllers\NoteController::class, 'index']);

Route::name('notes.destroy')->delete('/notes/{note}', [\App\Http\Controllers\NoteController::class, 'destroy']);
