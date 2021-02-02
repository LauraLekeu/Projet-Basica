{{--
      ressources/views/posts/index.blade.php
--}}

@extends('templates.index')

@section('title')
  Posts
@endsection

@section('content')

  <div class="section section-breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Our Blog</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row">

        @foreach ($posts as $post)
          <div class="col-sm-6">
            <div class="blog-post blog-single-post">
              <div class="single-post-title">
                <h2>{{ $post->title }}</h2>
              </div>
              <div class="single-post-image">
                <img src="{{ asset('assets/img/blog/' . $post->image ) }}" alt="Post Title">
              </div>
              <div class="single-post-info">
                <i class="glyphicon glyphicon-time"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y') }}
                <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>Comments</a>
              </div>
              <div class="single-post-content">
                <p>{{ Illuminate\Support\Str::limit($post->content, 200)  }}</p>
                <a href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}" class="btn">Read more</a>
              </div>
            </div>
          </div>
        @endforeach

        <div class="pagination-wrapper ">
          <ul class="pagination pagination-sm">
            <li>{{ $posts->links() }}</li>
          </ul>
        </div>

      </div>
    </div>
  </div>

@endsection
