@extends('admin.templates.index')

@section('content')
  <div class="jumbotron">
    <br/>
    <h1>Bonjour {{ Auth::user()->name }} </h1>
    <p>This is a template showcasing the optional theme stylesheet included in Bootstrap.
      Use it as a starting point to create something more unique by building on or modifying it.
    </p>
  </div>
@endsection
