<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
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

Route::get('/', [NoteController::class, "create"]);

Route::post('/', [NoteController::class, "store"]);

Route::get('/notes', [NoteController::class, "index"]);

Route::post('/search', [NoteController::class, "search"]);

Route::post('/yearsearch', [NoteController::class, "yearsearch"]);

Route::get('/edit/{id}', [NoteController::class, "edit"]);

Route::put('/notes/{id}', [NoteController::class, "update"]);

Route::delete('/notes/{id}', [NoteController::class, "destroy"]);