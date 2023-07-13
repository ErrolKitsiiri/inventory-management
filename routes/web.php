<?php

use App\Http\Livewire\Admin\Dashboard\DashboardComponent;
use App\Http\Livewire\Home\Home\HomeComponent;
use App\Http\Livewire\User\Home\ViewHomePageComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Home Routes
Route::get('/', HomeComponent::class)->name('home');

//Admin Routes
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    // Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/admin/dashboard', DashboardComponent::class)->name('dashboard');

    //Purchasing Routes
    Route::prefix('purchases')->group(function(){
        Route::get('/', Admin\Purchasing\IndexComponent::class)->name('admin.purchases.index');
        Route::get('/create', Admin\Purchasing\CreateComponent::class)->name('admin.purchases.create');
        // Route::get('/{id}/edit', Admin\Purchasing\EditComponent::class)->name('admin.purchases.edit');
    });

    //vendor routes
    Route::prefix('vendors')->group(function(){
        Route::get('/', Admin\Vendor\IndexComponent::class)->name('admin.vendor.index');
        Route::get('/create', Admin\Vendor\CreateComponent::class)->name('admin.vendor.create');
    });
});


