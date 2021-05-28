<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group( function (){
    Route::get('/dashboard',[\App\Http\Controllers\Chemhunt\DashboardController::class,'show'])->name('dashboard.index');
    Route::get('/hunt',[\App\Http\Controllers\Chemhunt\ExamController::class,'show'])->name('exam.index');
    Route::post('/hunt',[\App\Http\Controllers\Chemhunt\ExamController::class,'store'])->name('exam.submit');
});

require __DIR__.'/auth.php';
