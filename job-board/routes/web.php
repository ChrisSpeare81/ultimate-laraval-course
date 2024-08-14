<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


Route::get('', fn() => to_route('jobs.index'));

Route::get('login', fn() => to_route('auth.create'))->name('login');
Route::delete('logout', fn() => to_route('auth.destroy'))->name('logout');
Route::delete('auth', [AuthController::class], 'destory')->name('auth.destroy');

Route::resource('auth', AuthController::class)->only(['create', 'store']);
Route::resource('jobs', JobController::class)->only(['index', 'show']);
