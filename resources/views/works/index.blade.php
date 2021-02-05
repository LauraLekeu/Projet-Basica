{{--
      ressources/views/works/index.blade.php
--}}

@extends('templates.index')

@section('title')
  Works
@endsection

@section('banner')
  Our Portfolio
@endsection


@section('scripts')
  <script src={{ asset('assets/js/works/index.js') }}></script>
@endsection

@section('content')

  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2>We are leading company</h2>
          <h3>Specializing in Wordpress Theme Development</h3>
          <p>
            Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id. Donec elementum mi vitae enim fermentum lobortis.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row">
        <ul id="works_list" class="grid cs-style-2">
          @include('works._liste')
        </ul>
      </div>
      <ul class="pager">
        <li><a href="#" id="works-index-more" data-url="{{ route('works.ajax.more') }}" data-limit="6">More works</a></li>
      </ul>
    </div>
  </div>

@endsection
