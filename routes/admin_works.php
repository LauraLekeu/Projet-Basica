<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminWorks;

/*
|--------------------------------------------------------------------------
| ROUTES DES POSTS
|--------------------------------------------------------------------------
*/

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
