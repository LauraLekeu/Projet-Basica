<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminWorks;

/*
|--------------------------------------------------------------------------
| ROUTES DES POSTS
|--------------------------------------------------------------------------
*/

// ROUTE AJOUT POST : Insert
// PATTERN: /admin/posts/add/insert
// CTRL: AdminPosts
// ACTION: addInsert
Route::post('/admin/works/add/insert', [AdminWorks::class, 'addInsert'])->name('admin.works.add.insert');


// ROUTE AJOUT WORK : Formulaire
// PATTERN: /admin/works/add/form
// CTRL: AdminWorks
// ACTION: addForm
Route::get('/admin/works/add/form', [AdminWorks::class, 'addForm'])->name('admin.works.add.form');


// ROUTE DES WORKS
// PATTERN: /admin/works
// CTRL: AdminWorks
// ACTION: index
Route::get('/admin/works', [AdminWorks::class, 'index'])->name('admin.works');
