<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrainingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/trainings', [TrainingController::class, 'index'])->name('trainings.index');
Route::get('/trainings/{id}', [TrainingController::class, 'show'])->whereNumber('id')->name('trainings.show');
Route::post('/trainings', [TrainingController::class, 'store'])->name('trainings.store');
Route::put('/trainings/{id}', [TrainingController::class, 'update'])->whereNumber('id')->name('trainings.update');
Route::delete('/trainings/{id}', [TrainingController::class, 'destroy'])->whereNumber('id')->name('trainings.destroy');

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/{id}', [StudentController::class, 'show'])->whereAlphaNumeric('id')->name('students.show');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::put('/students/{id}', [StudentController::class, 'update'])->whereAlphaNumeric('id')->name('students.update');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->whereAlphaNumeric('id')->name('students.destroy');