<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminWorks;

/*
|--------------------------------------------------------------------------
| ROUTES DES POSTS
|--------------------------------------------------------------------------
*/

// ROUTE DES WORKS
// PATTERN: /admin/works
// CTRL: AdminWorks
// ACTION: index
Route::get('/admin/works', [AdminWorks::class, 'index'])->name('admin.works');
