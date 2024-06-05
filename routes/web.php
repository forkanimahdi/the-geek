<?php

use App\Http\Controllers\LeaderBoardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ScoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.register');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::post('/scores', [ScoreController::class, 'store'])->name('scores');
    Route::get('/question', [QuestionController::class, 'index']);
    Route::get('/intro', [QuestionController::class, 'show']);
    Route::get('/result', [QuestionController::class, 'result'])->name("result");
});
Route::get('/leaderboard', [LeaderBoardController::class, 'index'])->name("leaderboard");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
