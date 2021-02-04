<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPosts;

/*
|--------------------------------------------------------------------------
| ROUTES DES POSTS
|--------------------------------------------------------------------------
*/

// ROUTE DELETE POST
// PATTERN: /admin/posts/delete/{post}
// CTRL: AdminPosts
// ACTION: delete
Route::get('/admin/posts/delete/{post}', [AdminPosts::class, 'delete'])->where(['post' => '[1-9][0-9]*'])->name('admin.posts.delete');


// ROUTE AJOUT POST : update
// PATTERN: /admin/posts/edit/update/{post}
// CTRL: AdminPosts
// ACTION: update
Route::post('/admin/posts/edit/update/{post}', [AdminPosts::class, 'update'])->where(['post' => '[1-9][0-9]*'])->name('admin.posts.edit.update');


// ROUTE MODIFICATION POST : Formulaire
// PATTERN: /admin/posts/edit/form/{post}
// CTRL: AdminPosts
// ACTION: editForm
Route::get('/admin/posts/edit/form/{post}', [AdminPosts::class, 'editForm'])->where(['post' => '[1-9][0-9]*'])->name('admin.posts.edit.form');


// ROUTE AJOUT POST : Insert
// PATTERN: /admin/posts/add/insert
// CTRL: AdminPosts
// ACTION: addInsert
Route::post('/admin/posts/add/insert', [AdminPosts::class, 'addInsert'])->name('admin.posts.add.insert');


// ROUTE AJOUT POST : Formulaire
// PATTERN: /admin/posts/add/form
// CTRL: AdminPosts
// ACTION: addForm
Route::get('/admin/posts/add/form', [AdminPosts::class, 'addForm'])->name('admin.posts.add.form');


// ROUTE DES POSTS
// PATTERN: /admin/posts
// CTRL: AdminPosts
// ACTION: index
Route::get('/admin/posts', [AdminPosts::class, 'index'])->name('admin.posts');
