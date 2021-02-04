<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class AdminPosts extends Controller
{
    //
    public function index(){
        $posts = Post::orderBy('id', 'asc')->get();
        return view('admin.posts.index', compact('posts'));
    }

    public function addForm(){
        $posts = Post::orderBy('id', 'asc')->get();
        $categories = \App\Models\Categorie::orderBy('name', 'asc')->get();
        return view('admin.posts.addForm', compact('posts', 'categories'));
    }



}
