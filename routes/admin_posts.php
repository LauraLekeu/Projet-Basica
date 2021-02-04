<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPosts;

/*
|--------------------------------------------------------------------------
| ROUTES DES POSTS
|--------------------------------------------------------------------------
*/

// ROUTE DES POSTS
// PATTERN: /works
// CTRL: Works
// ACTION: index
Route::get('/admin/posts', [AdminPosts::class, 'index'])->name('admin.posts');
