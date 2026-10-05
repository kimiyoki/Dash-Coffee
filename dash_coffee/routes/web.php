<?php

use App\Http\Controllers\StaffAuthController;
use App\Http\Middleware\OwnerOnly;
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

/*
|--------------------------------------------------------------------------
| Public pages (customers can see these)
|--------------------------------------------------------------------------
*/
Route::view('/', 'homepage')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/menu', 'menu')->name('menu');
Route::view('/contact', 'contact')->name('contact');

/*
|--------------------------------------------------------------------------
| Hidden staff login (no link on the public site)
|--------------------------------------------------------------------------
*/
Route::get('/staff/login', [StaffAuthController::class, 'showLogin'])->name('login');
Route::post('/staff/login', [StaffAuthController::class, 'login'])
    ->middleware('throttle:5,1')   // max 5 tries per minute
    ->name('login.submit');

/*
|--------------------------------------------------------------------------
| Staff pages (must be logged in)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->prefix('staff')->group(function () {
    Route::post('/logout', [StaffAuthController::class, 'logout'])->name('logout');

    Route::view('/dashboard', 'staff.dashboard')->name('staff.dashboard');
    Route::view('/orders', 'staff.placeholder', ['title' => 'Orders'])->name('staff.orders');
    Route::view('/inventory', 'staff.placeholder', ['title' => 'Inventory'])->name('staff.inventory');

    // Owner only
    Route::middleware(OwnerOnly::class)->group(function () {
        Route::view('/sales', 'staff.placeholder', ['title' => 'Sales Report'])->name('staff.sales');
        Route::view('/accounts', 'staff.placeholder', ['title' => 'Staff Accounts'])->name('staff.accounts');
    });
});