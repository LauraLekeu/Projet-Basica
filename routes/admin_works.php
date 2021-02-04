<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminWorks;

/*
|--------------------------------------------------------------------------
| ROUTES DES POSTS
|--------------------------------------------------------------------------
*/

// ROUTE MODIFICATION WORK : update
// PATTERN: /admin/works/edit/update/{work}
// CTRL: AdminWorks
// ACTION: update
Route::post('/admin/works/edit/update/{work}', [AdminWorks::class, 'update'])->where(['work' => '[1-9][0-9]*'])->name('admin.works.edit.update');


// ROUTE MODIFICATION WORK : Formulaire
// PATTERN: /admin/works/edit/form/{work}
// CTRL: AdminWorks
// ACTION: editForm
Route::get('/admin/works/edit/form/{work}', [AdminWorks::class, 'editForm'])->where(['work' => '[1-9][0-9]*'])->name('admin.works.edit.form');


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
