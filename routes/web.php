<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ManageUsersController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PaymentController;
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
    // return view('welcome');
    // return view('stripe');
    return redirect('login');
});
Route::get('/stripe', [PaymentController::class, 'stripe']);

Route::post('stripe', [PaymentController::class, 'stripePost'])->name('stripe.post');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/manage/user', function () {
//     return view('manageuser.index');
// })->middleware(['auth', 'verified'])->name('manage_user.index');
// Route::get('/manage/user', function () {
//     return view('manageuser.create');
// })->middleware(['auth', 'verified'])->name('manage_user.show');


Route::middleware('auth')->group(function () {
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('login');

    })->name('logout');

    Route::group(['middleware' => ['role:super.admin']], function () {
        Route::get('/manageuser', [ManageUsersController::class, 'index'])->name('manage_user.index');
        Route::get('/manageuser/create', [ManageUsersController::class, 'create'])->name('manage_user.create');
        Route::post('/manageuser/store', [ManageUsersController::class, 'store'])->name('manage_user.store');
        Route::get('/manageuser/edit/{id}', [ManageUsersController::class, 'edit'])->name('manage_user.edit');
        Route::post('/manageuser/update/{id}', [ManageUsersController::class, 'update'])->name('manage_user.update');
        Route::get('/manageuser/delete/{user}', [ManageUsersController::class, 'destroy'])->name('manage_user.destroy');
    });

    Route::group(['middleware' => ['role:admin|super.admin']], function () {
        Route::get('/book', [BookController::class, 'index'])->name('book.index');
        Route::post('/book/store', [BookController::class, 'store'])->name('book.store');


    });
    Route::group(['middleware' => ['role:admin']], function () {
        // Route::get('/book', [BookController::class, 'index'])->name('book.index');

    });

    Route::group(['middleware' => ['role:reviewer']], function () {
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // 
    
});

require __DIR__.'/auth.php';
