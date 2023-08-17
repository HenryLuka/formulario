<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;



Route::put('/{id}', [FormController::class, 'update'])->name('form.update');
Route::get('/panel/editor/{id}', [FormController::class, 'editor'])->name('form.editor');
Route::get('/panel', [FormController::class, 'panel'])->name('form.panel');
Route::delete('/{id}', [FormController::class, 'destroy'])->name('form.destroy');
Route::get('/{id}', [FormController::class, 'show'])->name('form.show');
Route::post('/', [FormController::class, 'store'])->name('form.store');
Route::get('/form/create',[ FormController::class, 'create'])->name('form.create');
Route::get('/', [FormController::class, 'index'])->name('form.index');


