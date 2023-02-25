<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/Addposter', function () {
    return view('admin.addposter');
})->middleware(['auth', 'verified'])->name('Addposterdata');

Route::get('/posterlist', function () {
    return view('admin.posterlist');
})->middleware(['auth', 'verified'])->name('listposter');

Route::get('/userlist', function () {
    return view('admin.userlist');
})->middleware(['auth', 'verified'])->name('userlist');

Route::get('/Addcompany', function () {
    return view('User.addcompany');
})->middleware(['auth', 'verified'])->name('Addcompanydata');

Route::get('/companylist', function () {
    return view('User.listcompany');
})->middleware(['auth', 'verified'])->name('companylist');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
