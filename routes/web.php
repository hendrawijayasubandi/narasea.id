<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;

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
    return view('welcome');
});

Route::get('/share', function () {
    return view('share');
})->name('share');

Route::get('/sea', function () {
    return view('sea');
})->name('sea');

Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');
