<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/students', [StudentsController::class, 'index'])->name('students.index');
