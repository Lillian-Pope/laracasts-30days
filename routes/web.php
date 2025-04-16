<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);


//use App\Http\Controllers\JobController;
//use Illuminate\Support\Facades\Route;
//
//Route::view('/', 'home');
//
////Route::controller(JobController::class)->group(function () {
////    Route::get('/jobs','index');
////    Route::get('/jobs/create','create');
////    Route::get('/jobs/{job}','show');
////    Route::post('/jobs','store');
////    Route::get('/jobs/{job}/edit','edit');
////    Route::patch('/jobs/{job}','update');
////    Route::delete('/jobs/{job}','destroy');
////});
//
//Route:: resource('jobs', JobController::class);
//    //way to show only (or limit) certain pages:
//    //['only' => ['index', 'show', .....]
//    //'except' => ['index', 'show']
//    //]);
//
//Route::view('/contact', 'contact');
