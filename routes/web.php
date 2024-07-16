<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    //about
    Route::get("/about/edit", [AboutController::class, 'edit']);
    Route::post("/about", [AboutController::class, 'update']);
});

require __DIR__ . '/auth.php';
Route::get("/about", [AboutController::class, 'index']);
Route::view("/blog", "pages.blog");
Route::view("/article", "pages.article");
Route::view("/contact", "pages.contact");
Route::view("/services", "pages.services");
Route::view("/portfolio", "pages.portfolio");
