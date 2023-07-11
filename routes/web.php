<?php

use App\Http\Livewire\Admin\Dashboard\DashboardComponent;
use App\Http\Livewire\Home\Home\HomeComponent;
use App\Http\Livewire\User\Home\ViewHomePageComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Home Routes
Route::get('/', HomeComponent::class)->name('home');

//Admin Routes
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    // Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/admin/dashboard', DashboardComponent::class)->name('dashboard');
});


