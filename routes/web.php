<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\PermissionRole;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware([PermissionRole::class])->group(function () {
    Route::group(["prefix" => "users"], function () {
        Route::get("/", [UserController::class, "index"])->name("users.index");
        Route::get("/create", [UserController::class, "create"])->name("users.create");
        Route::post("create/", [UserController::class, "store"])->name("users.store");
        Route::get("/detail/{user}", [UserController::class, "show"])->name("users.show");
        Route::put("/detail/{user}/edit", [UserController::class, "update"])->name("users.update");
        Route::get("/delete/{user}", [UserController::class, "destroy"])->name("users.destroy");
    });
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::group(["prefix" => "history"], function () {
    Route::get("/", [HistoryController::class, "index"])->name("history.index");
})->middleware('auth');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
