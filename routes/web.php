<?php 

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\FreelancerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('catalog')->group(function () {
    Route::get('/', [CatalogController::class, 'index'])->name('catalog.index'); // Display catalog
    Route::get('/{catalog}', [CatalogController::class, 'show'])->name('catalog.show'); // Show catalog item
});


// Customer routes
// Route::middleware(['auth'])->group(function () {
Route::get('/customerboard', [CustomerController::class, 'dashboard'])->name('customerboard');
Route::get('messages/index', [CustomerController::class, 'messages'])->name('messages.index');
Route::get('userprofile/edit', [CustomerController::class, 'editProfile'])->name('userprofile.edit');
Route::get('/customer/support', [CustomerController::class, 'support'])->name('customer.support');
// });


// Freelancer routes
Route::get('/freelancerboard', [FreelancerController::class, 'freelancerdashboard'])->name('freelancerboard');
Route::get('/freelancer/messages', [FreelancerController::class, 'messages'])->name('freelancer.messages');
Route::get('/earnings/history', [FreelancerController::class, 'earningsHistory'])->name('earnings.history');
Route::get('/freelancer/profile/edit', [FreelancerController::class, 'editProfile'])->name('freelancer.profile.edit');


    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/builders.php';
require __DIR__.'/webfrom.php';