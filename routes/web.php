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

View::composer('homepage._carousel', function($view){
  $view->with('works', App\Models\Work::orderBy('inSlider', 'desc')
                                      ->take(3)
                                      ->get());
});


View::composer('works._liste', function($view){
  $view->with('works', App\Models\Work::orderBy('created_at', 'desc')
                                      ->take(6)
                                      ->get());
});


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

// // ROUTE PAR DEFAUT
// // PATTERN: /
// // CTRL: /
// // ACTION: /
Route::get('/', function () {
    return view('homepage.index');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
