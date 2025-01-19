<?php


use Illuminate\Support\Facades\Route;
session_start();
Route::get('/', function () {
    return view('welcome');
});

Route::get('postproject',function() {
 return view('postproject');
});
Route::get('/profileinfo', function () {
    return view('profileinfo');
});
Route::get('/testing/explore', function () {
    return view('testing.explore');
});

Route::get('/explorecategories/plumber', function () {
    return view('explorecategories.plumber');
});
Route::get('/explorecategories/plasterers', function () {
    return view('explorecategories.plasterers');
});
Route::get('/explorecategories/electricians', function () {
    return view('explorecategories.electricians');
});
Route::get('/explorecategories/carpenters', function () {
    return view('explorecategories.carpenters');
});
Route::get('/explorecategories/painters', function () {
    return view('explorecategories.painters');
});
Route::get('/explorecategories/tilers', function () {
    return view('explorecategories.tilers');
});

// Route::get('/plumber', [ServiceController::class, 'plumber'])->name('plumber');
// Route::get('/painter', [ServiceController::class, 'painter'])->name('painter');
// Route::get('/tiler', [ServiceController::class, 'tiler'])->name('tiler');
// Route::get('/plaster', [ServiceController::class, 'plaster'])->name('plaster');
// Route::get('/carpenter', [ServiceController::class, 'carpenter'])->name('carpenter');

// Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('addToCart');
// Route::get('/cart', [CartController::class, 'showCart'])->name('cart');


// // Route for displaying the user dashboard
// Route::middleware(['auth'])->group(function () {
//     Route::get('/userdashboard', [UserdashboardController::class, 'index'])->name('userdashboard');
//     Route::post('/userdashboard/chat', [UserdashboardController::class, 'sendMessage'])->name('userdashboard.chat');
//     Route::post('/userdashboard/payment', [UserdashboardController::class, 'processPayment'])->name('userdashboard.payment');
// });

// Route::get('/service/{service}', [ServiceController::class, 'show'])->name('service.show');

// // Route for freelancer dashboard
// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', [DashboardfreelancerController::class, 'index'])->name('dashboard');
// });

// Route::get('/explorecategories/electricians', function () {
//     return view('explorecategories.electricians');
// });

// // Route::middleware(['auth'])->group(function () {
// //     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// //     Route::post('/chat', [DashboardController::class, 'sendMessage']);
// //     Route::get('/location/{builderId}', [DashboardController::class, 'getLocation']);
// //     Route::post('/payment', [DashboardController::class, 'processPayment']);
// //     Route::get('/history', [DashboardController::class, 'viewHistory']);
// // });



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
//     Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
//     Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);
    
//     Route::get('/auth/facebook', [SocialAuthController::class, 'redirectToFacebook'])->name('auth.facebook');
//     Route::get('/auth/facebook/callback', [SocialAuthController::class, 'handleFacebookCallback']);
    
//     //Reference
//     Route::get('/testing/create', [TestingController::class, 'create']);
//     Route::post('/testing/store', [TestingController::class, 'store'])->name('testing.store');
        
                  
//     //     Route::get('/testing/create', [TestingController::class, 'create']);
//     //  Route::post('/testing/store', [TestingController::class, 'store'])->name('testing.store');
  
// });

// require __DIR__.'/auth.php';
