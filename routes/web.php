<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PosterController;
use App\Http\Controllers\User\CompanyController;
use App\Http\Controllers\Admin\PosterGeneraterController;

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

Route::get('/posterlist', function () {
    return view('admin.posterlist');
})->middleware(['auth', 'verified'])->name('listposter');




// Group for Admin

Route::middleware(['auth', 'verified', 'admin'])->group(function () {

    // company routes

    Route::get('/company', [CompanyController::class, 'add'])->name('company.add');
    Route::post('/company/store', [CompanyController::class, 'store'])->name('company.store');
    Route::get('/companies', [CompanyController::class, 'list'])->name('company.list');   
    Route::delete('/company/delete/{id}', [CompanyController::class, 'delete'])->name('company.delete');
    // Route::get('/company/edit/{id}', [CompanyController::class, 'edit'])->name('companyedit');
    Route::post('/company/edit/{id}', [CompanyController::class, 'edit_company'])->name('company.edit');

    // group for user

    Route::get('/poster', [PosterController::class, 'add'])->name('poster.add');
    Route::post('/poster/store', [PosterController::class, 'store'])->name('poster.store');
    Route::get('/posters', [PosterController::class, 'list'])->name('poster.list');
    Route::post('/poster/Ajax', [PosterGeneraterController::class, 'store_ajax'])->name('poster.store.ajax');
    Route::delete('/poster/delete/{id}', [PosterController::class, 'delete'])->name('poster.delete');

    Route::get('/poster/generate', [PosterGeneraterController::class, 'generate'])->name('generatingposter');

    Route::get('/users', [UserController::class, 'list'])->name('users.List');
    Route::get('/company/{id}', [CompanyController::class, 'list_usercompany'])->name('usercompanies.list');

});








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
