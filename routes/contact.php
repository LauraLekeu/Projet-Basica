<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ROUTE CONTACT
|--------------------------------------------------------------------------
*/

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');
