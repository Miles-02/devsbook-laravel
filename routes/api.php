<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/notes', [NotesController::class, 'listAll']);

Route::get('/note/{id}', [NotesController::class, 'listNote']);


Route::post('/note/add', [NotesController::class, 'addAction']);


Route::put('/note/{id}/edit', [NotesController::class, 'editAction']);

Route::get('/note/{id}/delete', [NotesController::class, 'deleteAction']);
