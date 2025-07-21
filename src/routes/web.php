<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Booking Submission Route
|--------------------------------------------------------------------------
*/
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

/*
|--------------------------------------------------------------------------
| Admin Panel Route
|--------------------------------------------------------------------------
| Tambahkan route ke halaman admin. Pastikan file `resources/views/admin/dashboard.blade.php` tersedia
*/


/*
|--------------------------------------------------------------------------
| Livewire Asset Handling
|--------------------------------------------------------------------------
| NOTE: Do Not Remove if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});

/*
|--------------------------------------------------------------------------
| Default Welcome Route
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});
