<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\FallbackController;
use App\Models\Aluno;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/lista', [AlunoController::class, 'lista'])->name('aluno.lista');
Route::get('/create', [AlunoController::class, 'create'])->name('aluno.create');

Route::get('/create-aluno', [AlunoController::class, 'create'])->name('aluno.create');
Route::post('store-aluno', [AlunoController::class, 'store'])->name('aluno-store');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::fallback(function() {
    return response()->view('fallback', [], 404);
});