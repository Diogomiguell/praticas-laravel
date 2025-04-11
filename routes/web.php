<?php

use App\Http\Controllers\AlunoController;
use App\Models\Aluno;
use Illuminate\Support\Facades\Route;

Route::get('/', [AlunoController::class, 'index'])->name('aluno.index');
Route::get('/create-aluno', [AlunoController::class, 'create'])->name('aluno.create');
Route::post('store-aluno', [AlunoController::class, 'store'])->name('aluno-store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
