<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); 
})->name('home');

Route::get('/page1', function () {
    return view('page.page1'); 
})->name('page1');

Route::get('/page2', function () {
    return view('page.page2'); 
})->name('page2');

Route::get('/page3', function () {
    return view('page.page3'); 
})->name('page3');

Route::get('/page4', function () {
    return view('page.page4'); 
})->name('page4');

Route::get('/page5', function () {
    return view('page.page5'); 
})->name('page5');
