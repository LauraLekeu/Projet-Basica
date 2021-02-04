<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPosts;

/*
|--------------------------------------------------------------------------
| ROUTES DES POSTS
|--------------------------------------------------------------------------
*/

// ROUTE AJOUT POST
// PATTERN: /admin/posts/add/form
// CTRL: AdminPosts
// ACTION: index
Route::get('/admin/posts/add/form', [AdminPosts::class, 'addForm'])->name('admin.posts.add.form');


// ROUTE DES POSTS
// PATTERN: /admin/posts
// CTRL: AdminPosts
// ACTION: index
Route::get('/admin/posts', [AdminPosts::class, 'index'])->name('admin.posts');
