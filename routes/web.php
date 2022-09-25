<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use Illuminate\Http\Request;

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


Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/', function () {
    return view('calender');
})->middleware(['auth'])->name('home');

Route::delete('/calender/{calendar}', function (calender $calender) {
    //
});

Route::post('/calendar', function (Request $request) {
    //
});

 Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


use App\Http\Controllers\ScheduleController;

// イベント登録処理
Route::post('/schedule-add', [ScheduleController::class, 'scheduleAdd'])->name('schedule-add');