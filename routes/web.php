<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
|--------------------------------------------------------------------------
| VUES COMPOSER
|--------------------------------------------------------------------------
*/

View::composer('homepage._lastest_blog', function($view){
  $view->with('posts', App\Models\Post::orderBy('created_at', 'desc')
                                      ->take(3)
                                      ->get());
});


/*
|--------------------------------------------------------------------------
| ROUTES
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Works;

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



/*
|--------------------------------------------------------------------------
| ROUTES BACKOFFICE
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
