<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


Route::get('/clear-cache', function () {
      Artisan::call('optimize:clear');
      return 'Cache is cleared';
});

Route::prefix('/')->group(function () {
      Route::get('/', [App\Http\Controllers\website\HomeController::class, 'index'])->name('homepage');
      Route::get('/detail/{slug}', [App\Http\Controllers\website\HomeController::class, 'detail'])->name('detail');
});

Route::prefix('law')->group(function () {
      Route::get('/', [App\Http\Controllers\website\LawController::class, 'index'])->name('law');
      Route::get('/detail/{slug}', [App\Http\Controllers\website\LawController::class, 'detail'])->name('law.detail');
});

Route::prefix('download')->group(function () {
      Route::get('/', [App\Http\Controllers\website\DownloadController::class, 'index'])->name('download');
      Route::get('/detail/{slug}', [App\Http\Controllers\website\DownloadController::class, 'detail'])->name('download.detail');
});

Route::prefix('/about-us')->group(function () {
      Route::get('/leader', [App\Http\Controllers\website\AboutController::class, 'leader'])->name('about.leader');
      Route::get('/structure', [App\Http\Controllers\website\AboutController::class, 'structure'])->name('about.structure');
});

Route::get('/contact', [App\Http\Controllers\website\ContactController::class, 'index'])->name('contact');
Route::get('/arrested', [App\Http\Controllers\website\ArrestedController::class, 'index'])->name('arrested');
Route::get('/career', [ App\Http\Controllers\website\CareerController::class, 'index'])->name('career');
Route::get('/article-by-category/{slug}', [App\Http\Controllers\website\ArticleByCategoryController::class, 'index'])->name('view-by-category');
