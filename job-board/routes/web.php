<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobController;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Route;


Route::get('', fn() => to_route('jobs.index'));

Route::get('login', fn() => to_route('auth.create'))->name('login');
Route::delete('logout', fn() => to_route('auth.destroy'))->name('logout');
Route::delete('auth', [AuthController::class], 'destory')->name('auth.destroy');

Route::resource('auth', AuthController::class)->only(['create', 'store']);
Route::resource('jobs', JobController::class)->only(['index', 'show']);

Route::middleware('auth')->group(function () {
    Route::resource('jobs.application', JobApplicationController::class)->only(['create', 'store']);
});
