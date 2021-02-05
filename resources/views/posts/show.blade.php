{{--
      ressources/views/posts/show.blade.php
--}}

@extends('templates.index')

@section('title')
  Posts - {{ $post->title }}
@endsection

@section('banner')
  Blog Post
@endsection

@section('content')



  <div class="section">
  <div class="container">
  <div class="row">
    <!-- Blog Post -->
    <div class="col-sm-8">
      <div class="blog-post blog-single-post">
        <div class="single-post-title">
          <h2>{{ $post->title }}</h2>
        </div>

        <div class="single-post-image">
          <img src="{{ asset('assets/img/blog/' . $post->image ) }}" alt="Post Title">
        </div>
        <div class="single-post-info">
          <i class="glyphicon glyphicon-time"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y') }} <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
        </div>
        <div class="single-post-content">
          <p> {{ $post->content }} </p>
        </div>
      </div>
    </div>
    <!-- End Blog Post -->
    <!-- Sidebar -->
    <div class="col-sm-4 blog-sidebar">

      <h4>Recent Posts</h4>
      @include('posts._list_recent_posts', ['posts' => \App\Models\Post::orderBy('created_at', 'desc')->take(5)->get()])

      <h4>Categories</h4>
      @include('categories._list_categories', ['categories' => \App\Models\Categorie::orderBy('created_at', 'desc')->take(5)->get()])


    </div>
    <!-- End Sidebar -->
  </div>
</div>
</div>

@endsection
