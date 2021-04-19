<?php

use App\Http\Controllers\BookHistoryController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RideController;
use App\Http\Controllers\RideReqController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SearchRideController;
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
Route::delete('/delete-vehicle/{vehicle}', [App\Http\Controllers\VehicleController::class, 'delete_vehicle'])->name('delete-vehicle');
Route::get('/update-vehicle/{vehicle}', [App\Http\Controllers\VehicleController::class, 'update_vehicle_form'])->name('update-vehicle-form');
Route::patch('/update-vehicle/{vehicle}', [App\Http\Controllers\VehicleController::class, 'update_vehicle'])->name('update-vehicle');

// add route
Route::middleware('auth')->group(function (){
    Route::get('/add-route/{user}', [RouteController::class,'display_add_form'])->name('add-route-form');
    Route::post('/add-route/{user}', [RouteController::class,'insertRoute'])->name('add-route'); // Insert route
});

//Book history

Route::get('/book-history/{user}', [BookHistoryController::class,'book_history'])->name('book-history');


//ride request
Route::get('/ride-req/{user}', [RideController::class,'display_req'])->name('ride-request');

// Search Ride
Route::post('/search', [SearchRideController::class,'display'])->name('search_ride');


// ride req. from user
Route::post('/ride-req/{user}/{vehicle}', [RideReqController::class,'send_Req'])->name('req_ride');


//Accpet req mail
Route::post('accepted/{user:id}',[MailController::class,'sendmail'])->name('accept_mail');

//reject mail;
Route::post('rejected/{user:id}',[MailController::class,'sendmailDecline'])->name('reject_mail');

// passenger Book history
Route::get('/my-pool/{user}',[BookHistoryController::class,'pass_book_history'])->name('pass-book-history');
