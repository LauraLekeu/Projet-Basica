<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;

/*
|--------------------------------------------------------------------------
| ROUTES DES POSTS
|--------------------------------------------------------------------------
*/

// ROUTE DES POSTS
// PATTERN: /works
// CTRL: Works
// ACTION: index
Route::get('/posts', [Posts::class, 'index'])->name('posts');

// ROUTE DETAIL POST
// PATTERN: /posts/{post}/{slug}
// CTRL: Posts
// ACTION: show
Route::get('/posts/{post}/{slug}', [Posts::class, 'show'])->where(['post' => '[1-9][0-9]*',
                                                                   'slug' => '[a-z0-9][a-z0-9\-]*'])
                                                          ->name('posts.show');

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
