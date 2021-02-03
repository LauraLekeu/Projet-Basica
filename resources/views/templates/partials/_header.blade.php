{{--
      ressources/views/templates/partials/_header.php
--}}

<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png')}}" alt="Basica"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ (\Request::route()->getName() == 'home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                <li class="{{ (\Request::route()->getName() == 'works') ? 'active' : '' }}"><a href="{{ route('works') }}">Portfolio</a></li>
                <li class="{{ (\Request::route()->getName() == 'posts') ? 'active' : '' }}"><a href="{{ route('posts') }}">Blog</a></li>
                <li class="{{ (\Request::route()->getName() == 'contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</header>
