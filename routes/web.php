<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\pendudukController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Filament\Dasawisma\Resources\PendudukResource;
use Filament\Facades\Filament;

Route::get('/tabelPenduduk', [pendudukController::class, 'index']);
Route::get('/LoginPage', [LoginController::class, 'index']);

Route::get('/', function () {
    // return view('welcome');
    return redirect('/dashboard');
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::get('/dasawisma/penduduks', [PendudukResource::class, 'index'])->name('filament.resources.penduduks.index');
// Route::get('/dasawisma/penduduks', [PendudukResource::class, 'index'])->name('filament.dasawisma.resources.penduduks.index');
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
