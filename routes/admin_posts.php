<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPosts;

/*
|--------------------------------------------------------------------------
| ROUTES DES POSTS
|--------------------------------------------------------------------------
*/

// ROUTE AJOUT POST : Insert
// PATTERN: /admin/posts/add/insert
// CTRL: AdminPosts
// ACTION: addInsert
Route::post('/admin/posts/add/insert', [AdminPosts::class, 'addInsert'])->name('admin.posts.add.insert');


// ROUTE AJOUT POST : Formulaire
// PATTERN: /admin/posts/add/form
// CTRL: AdminPosts
// ACTION: addForm
Route::get('/admin/posts/form', [AdminPosts::class, 'addForm'])->name('admin.posts.add.form');


// ROUTE DES POSTS
// PATTERN: /admin/posts
// CTRL: AdminPosts
// ACTION: index
Route::get('/admin/posts', [AdminPosts::class, 'index'])->name('admin.posts');
