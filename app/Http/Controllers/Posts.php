<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class Posts extends Controller
{
    //
    public function index(){

        $posts = Post::orderBy('created_at', 'desc')
                                            ->paginate(4);
        return view('posts.index', compact('posts'));
      }


    public function show($id){
      $post = Post::find($id);
      return view('posts.show', compact('post'));
    }
}
