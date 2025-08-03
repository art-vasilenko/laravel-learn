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

Route::get('/workers', [WorkerController::class, 'index'])->name('worker.index');

Route::get('/workers/{worker}', [WorkerController::class, 'show'])->name('worker.show');

Route::post('/workers/create', [WorkerController::class, 'create'])->name('worker.create');;

Route::delete('/workers/delete', [WorkerController::class, 'delete'])->name('worker.delete');;

Route::put('/workers/update', [WorkerController::class, 'update'])->name('worker.update');;
