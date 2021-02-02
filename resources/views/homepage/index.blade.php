{{--
      ressources/views/homepage/show.blade.php
--}}

@extends('templates.index')

@section('title')
  Accueil
@endsection

@section('content')

  {{-- 3 meilleurs projets (inSlider) --}}
  @include('homepage._carousel', ['works' => \App\Models\Work::where('inSlider', 1)->orderBy('created_at', 'desc')->take(3)  ->get()])


  <div class="section section-white">
    <div class="container">
      <div class="row">
        <div class="section-title">
          <h1>Our Recent Works</h1>
        </div>
        <ul class="grid cs-style-3">
          {{-- liste des 6 derniers projets --}}
          @include('works._liste', ['works' => \App\Models\Work::orderBy('created_at', 'desc')->take(6)->get()])
        </ul>
      </div>
    </div>
  </div>

  <hr>


  <div class="section">
    <div class="container">
      <div class="row">
        {{-- liste des 3 derniers posts --}}
        @include('homepage._lastest_blog')
        {{-- liste des 3 derniers posts twitter --}}
        @include('homepage._lastest_twitter')
      </div>
    </div>
  </div>

@endsection
