<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Works;

/*
|--------------------------------------------------------------------------
| ROUTES DES WORKS
|--------------------------------------------------------------------------
*/

// ROUTE DETAIL WORK
// PATTERN: /works/{work}/{slug}
// CTRL: Works
// ACTION: show
Route::get('/works/{work}/{slug}', [Works::class, 'show'])->where(['work' => '[1-9][0-9]*',
                                                                   'slug' => '[a-z0-9][a-z0-9\-]*'])
                                                          ->name('works.show');

// ROUTE DES WORKS
// PATTERN: /works
// CTRL: Works
// ACTION: index
Route::get('/works', [Works::class, 'index'])->name('works');

// ROUTE AJAX MORE WORKS
// PATTERN: /works/ajax/more
// CTRL: Works
// ACTION: index
Route::get('/works/ajax/more', [Works::class, 'more'])->name('works.ajax.more');

// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: /
// ACTION: /
Route::get('/', function () {
    return view('homepage.index');
})->name('home');
