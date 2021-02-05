{{--
      ressources/views/templates/index.blade.php
--}}

<!DOCTYPE html>
<html class="no-js">
<html lang="en">
  <head>
    @include('templates.partials._head')
  </head>
  <body>
    @include('templates.partials._header')
    
    @if(\Request::route()->getName() !== 'home')
      @include('templates.partials._banner')
    @endif

    @yield('content')

    @include('templates.partials._footer')
    @include('templates.partials._scripts')
  </body>
</html>
