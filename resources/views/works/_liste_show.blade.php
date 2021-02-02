{{--
      ressources/views/works/_liste.blade.php
--}}
@foreach ($works as $work)

  <div class="col-md-3 col-sm-6">
    <figure>
      <img src="{{ asset('assets/img/portfolio/' . $work->image ) }}" alt=" {{$work->image}} ">
      <figcaption>
        <h3> {{$work->title}} </h3>
        <span> {{  $work->client->name }} </span>
        <a href="{{ route('works.show', ['work' => $work->id, 'slug' => Str::slug($work->title, '-')]) }}">Take a look</a>
      </figcaption>
    </figure>
  </div>
  {{-- @foreach ($work->tags as $tag)
    {{dump($tag->id)}}
  @endforeach --}}

@endforeach
