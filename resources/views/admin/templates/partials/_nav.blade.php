{{--
      ressources/views/admin/templates/partials/_header.php
--}}

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Bootstrap theme</a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="{{ (\Request::route()->getName() == 'dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="{{ (\Request::route()->getName() == 'admin.posts') ? 'active' : '' }}"><a href="{{ route('admin.posts') }}">Liste des posts</a></li>
        <li class="{{ (\Request::route()->getName() == 'admin.works') ? 'active' : '' }}"><a href="#contact">Liste des works</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestion <span class="caret"></span></a>
          <ul class="dropdown-menu">

            <li class="dropdown-header h5">Posts</li>
            <li><a href="{{ route('admin.posts.add.form')}}">Ajouter</a></li>
            <li><a href="#">Modifier</a></li>
            <li><a href="#">Supprimer</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header h5">Works</li>
            <li><a href="#">Ajouter</a></li>
            <li><a href="#">Modifier</a></li>
            <li><a href="#">Supprimer</a></li>

          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->

  </div>
</nav>
