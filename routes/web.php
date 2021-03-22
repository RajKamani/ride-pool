<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/book-ride', [App\Http\Controllers\BookRideController::class, 'index'])->name('home');

// Route May Change After UI integration. DON't touch
Route::post('/offerride/{user}', [App\Http\Controllers\CheckDriverController::class, 'CheckIfDriver'])->name('offer_ride');
Route::post('/Agreement/accept/{user}', [App\Http\Controllers\CheckDriverController::class, 'UpdateAsDriver'])->name('AgreementAccept');
Route::get('/agreement/{user}', [App\Http\Controllers\CheckDriverController::class, 'display_agreement'])->name('redirect_Agreement');
// After This Line You may Add.

//Create Vehicle
Route::get('/add-vehicle', [App\Http\Controllers\VehicleController::class, 'display_add_form'])->name('add-vehicle-form');
Route::post('/add-vehicle/{user}', [App\Http\Controllers\VehicleController::class, 'add_vehicle'])->name('add-vehicle');

//manage Vehicle
Route::get('/manage-vehicle/{user}', [App\Http\Controllers\VehicleController::class, 'display_vehicle_list'])->name('manage-vehicle');

