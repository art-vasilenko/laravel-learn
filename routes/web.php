<?php

use \App\Http\Controllers\WorkerController;
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

Route::get('/', function () {
    return view('welcome');
});

// Просмотр и добавление воркера
Route::get('/workers', [WorkerController::class, 'index'])->name('worker.index');
Route::get('/workers/create', [WorkerController::class, 'create'])->name('worker.create');
Route::get('/workers/{worker}', [WorkerController::class, 'show'])->name('worker.show');
Route::post('/workers', [WorkerController::class, 'store'])->name('worker.store');

//Редактирвоание
Route::get('/workers/{worker}/edit', [WorkerController::class, 'edit'])->name('worker.edit');
Route::patch('/workers/{worker}', [WorkerController::class, 'update'])->name('worker.update');

//Удаление
Route::delete('/workers/{worker}', [WorkerController::class, 'delete'])->name('worker.delete');

