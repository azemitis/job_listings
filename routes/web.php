<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;


require __DIR__ . '/auth.php';

Route::middleware('auth:sanctum')->get('/auth', function (Request $request) {
    return $request->user();
});

/** Job Dashboard CRUD */
Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/create', [DashboardController::class, 'create'])->name('create');
    Route::post('/dashboard', [DashboardController::class, 'store'])->name('store');
    Route::get('/dashboard/{id}', [DashboardController::class, 'show'])->name('show');
    Route::get('/dashboard/{id}/edit', [DashboardController::class, 'edit'])->name('edit');
    Route::put('/dashboard/{id}', [DashboardController::class, 'update'])->name('update');
    Route::delete('jobs/{id}', [DashboardController::class, 'destroy'])->name('destroy');

    /** User management */
    Route::resource('users', UserController::class)->only(['index', 'update', 'destroy']);

    /**Give admin rights to registered users to make posts.*/
    Route::get('users/search', [UserController::class, 'search'])->name('users.search');
});


/**Everything else is Vue routes*/
Route::view('/{any}', 'home')
    ->where('any', '^(?!api\/)[\/\w\.-]*');


