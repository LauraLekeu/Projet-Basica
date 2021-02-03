{{--
      ressources/views/categories/_list_categories.blade.php
--}}


<ul class="blog-categories">
  @foreach ($categories as $categorie)
    <li><a href="#">{{ $categorie->name }}</a></li>
  @endforeach
</ul>
