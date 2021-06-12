<?php

use Illuminate\Support\Facades\Route;


Route::get('loaderio-877fd3f70fc8892f582b6aad582805d8/', function () {
    return 'loaderio-877fd3f70fc8892f582b6aad582805d8';
})->name('loader');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('auth')->group( function (){
    Route::get('/dashboard',[\App\Http\Controllers\Chemhunt\DashboardController::class,'show'])->name('dashboard.index');
    Route::get('/hunt',[\App\Http\Controllers\Chemhunt\ExamController::class,'show'])->name('exam.index');
    Route::post('/hunt',[\App\Http\Controllers\Chemhunt\ExamController::class,'store'])->name('exam.submit');
});

require __DIR__.'/auth.php';
