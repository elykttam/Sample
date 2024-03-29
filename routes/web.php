<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Middleware\CheckUserType;
// use App\Http\Middleware\BlockEverything;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::get('login', [AuthController::class, 'loginPage'])->name('login');

// Route::group(['middleware' => BlockEverything::class], function () {
// Route::get('info', function() {
//       return 'kyle pogi';
//     });
// });

Route::group(['middleware' => [
    'auth',
]], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    // user
    Route::resource('students', StudentController::class);

    // admin routes
    Route::group([
        'middleware' => CheckUserType::class,
        'prefix' => 'admin',
    ], function () {
      Route::resource('users', UserController::class);
      Route::resource('payment_types', PaymentTypeController::class);
    });
});