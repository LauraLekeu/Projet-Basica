{{--
      ressources/views/homepage/_carousel.blade.php
--}}


<section id="main-slider" class="no-margin">
  <div class="carousel slide">
    <ol class="carousel-indicators">
      <li data-target="#main-slider" data-slide-to="0" class="active"></li>
      <li data-target="#main-slider" data-slide-to="1"></li>
      <li data-target="#main-slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

      @foreach ($works as $work)
          <div class="item {{ $loop->index == 0 ? 'active' : "" }}" style="background-image: url('{{asset('assets/img/portfolio/' . $work->image )}}')">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="carousel-content centered">
                    <h2 class="animation animated-item-1">{{ $work->title  }}</h2>
                    <p class="animation animated-item-2">{{ $work->client->name  }}</p>
                    <br>
                    <a class="btn btn-md animation animated-item-3" href="{{ route('works.show', ['work' => $work->id, 'slug' => Str::slug($work->title, '-')]) }}">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      @endforeach

    </div><!--/.carousel-inner-->
  </div><!--/.carousel-->
  <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
    <i class="icon-angle-left"></i>
  </a>
  <a class="next hidden-xs" href="#main-slider" data-slide="next">
    <i class="icon-angle-right"></i>
  </a>
</section>
