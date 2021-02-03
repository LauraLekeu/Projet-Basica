{{--
      ressources/views/posts/_list_recent_posts.blade.php
--}}


<ul class="recent-posts">
  @foreach ($posts as $post)
    <li><a href="#">{{ $post->title }}</a></li>
  @endforeach
</ul>
