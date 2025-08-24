<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/quote', function () {
    return view('quote');
})->name('quote');

Route::get('/rates', function () {
    return view('rates');
})->name('rates');

Route::get('/locations', function () {
    return view('locations');
})->name('locations');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');
