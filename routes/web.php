<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cvPersonalAzkaController;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});
Route::get('/resume', function () {
    return view('resume');
});
Route::get('/service', function () {
    return view('services');
});
Route::get('/service-detail', function () {
    return view('servise-detail');
});
Route::get('/starter-page', function () {
    return view('starter-page');
});
