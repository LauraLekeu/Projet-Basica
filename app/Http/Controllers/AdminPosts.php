<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class AdminPosts extends Controller
{
    //
    public function index(){
        $posts = Post::orderBy('id', 'desc')->get();
        return view('admin.posts.index', compact('posts'));
    }

    public function addForm(){
        $posts = Post::orderBy('id', 'asc')->get();
        $categories = \App\Models\Categorie::orderBy('name', 'asc')->get();
        return view('admin.posts.addForm', compact('posts', 'categories'));
    }

    public function addInsert(Request $request){


      $post = new Post;

      $post->title = $request->title;
      $post->content = $request->content;
      $post->created_at = NOW();
      $post->categorie_id = $request->categorie;

      if ($request->file('image')) {
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('assets/img/blog'), $imageName);

        $post->image = $imageName;
      }

      $post->save();

      return redirect()->route('admin.posts');

    }

    public function editForm($id){
        $post = Post::find($id);
        $categories = \App\Models\Categorie::orderBy('name', 'asc')->get();
        return view('admin.posts.editForm', compact('post', 'categories'));
    }




}
