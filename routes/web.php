<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    //about
    Route::get("/about/edit", [AboutController::class, 'edit']);
    Route::post("/about", [AboutController::class, 'update']);

    //blog 

    Route::get('/admin/blog', [BlogController::class, 'indexAdmin']);
    Route::get('/blog/create', [BlogController::class, 'create']);
    Route::get('/blog/delete/{id}', [BlogController::class, 'destroy']);
    Route::post('/blog/store', [BlogController::class, 'store']);

    //categories
    Route::get("/admin/categories", [CategoryController::class, 'index']);
    Route::get("/category/delete/{id}", [CategoryController::class, 'destroy']);
    Route::post("/admin/categories", [CategoryController::class, 'store']);


    // experience 
    Route::get("/admin/experience", [ExperienceController::class, 'index']);
    Route::post("/admin/experience", [ExperienceController::class, 'store']);
    Route::get("/admin/experience/create", [ExperienceController::class, 'create'])->name("experience.create");
    Route::get("/admin/experience/delete/{id}", [ExperienceController::class, 'destroy']);
});

require __DIR__ . '/auth.php';
Route::get("/about", [AboutController::class, 'index']);
Route::get("/blog", [BlogController::class, 'index']);
Route::get("/blog/{id}", [BlogController::class, 'show']);

Route::get("/contact", function () {
    $user = User::find(1);
    return view("pages.contact")->with("user", $user);
});
Route::get("/services", [ServiceController::class, 'index']);
Route::get("/portfolio", [ProjectController::class, 'index']);
