<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_merchants_view', [AdminController::class, 'add_merchant_view']);

Route::post('/create_merchant', [AdminController::class, 'create_merchant']);

Route::get('/add_org_admin_view', [AdminController::class, 'add_org_admin_view']);

Route::post('/create_org_admin', [AdminController::class, 'create_org_admin']);

Route::get('/all_orgs_view', [AdminController::class, 'all_orgs_view']);
Route::get('/delete_merchant/{id}', [AdminController::class, 'delete_merchant']);

Route::get('/all_org_admins_view', [AdminController::class, 'all_org_admins_view']);
Route::get('/delete_org_admin/{id}', [AdminController::class, 'delete_org_admin']);

Route::get('/update_org_admin_view/{id}', [AdminController::class, 'update_org_admin_view']);
Route::post('/update_org_admin/{id}', [AdminController::class, 'update_org_admin']);

Route::get('/update_merchant_view/{id}', [AdminController::class, 'update_merchant_view']);
Route::post('/update_merchant/{id}', [AdminController::class, 'update_merchant']);