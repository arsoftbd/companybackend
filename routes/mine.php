<?php

use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/hero', [HeroController::class, 'index'])->name('admin.hero.index');
Route::put('/admin/hero', [HeroController::class, 'update'])->name('admin.hero.update');
