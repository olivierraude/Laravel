@extends('template')

@section('title', $title)

@section('content')

  <h3 class="yellow lighten-1 blue-grey-text text-darken-3"> _Dernières entrées <i class="material-icons" style="font-size:.7em">autorenew/highlight/explore</i></h3>

    <div class="row {{-- carousel --}}">

      @foreach ($labels as $label)

      <div class="col s6 m3 {{-- carousel-item --}}">
        <div class="card hoverable">
          <a class="" href="{{ route('items.show', $label) }}">
            <div class="card-image">
              <img src="{{ $label->image }}">
              <span class="card-title">{{ $label->artist }}</span>
              <a class="btn-floating halfway-fab waves-effect waves-light red" href="{{ route('items.show', $label) }}"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              <p class="truncate">{{ $label->description }}</p>
              <p class="yellow lighten-1 blue-grey-text text-darken-3"><i class="material-icons" style="font-size:.7em">arrow_forward</i> {{ $label->price }} </p>
            </div>
          </a>
        </div>
      </div>

      @endforeach

    </div>

  <h3 class="yellow lighten-1 blue-grey-text text-darken-3"> _Magasin <i class="material-icons" style="font-size:.7em">adjust/headset/whatshot</i></h3>

    <div class="row">

        @foreach ($items as $item)

        <div class="col s6 m3">
          <div class="card hoverable">
            <a class="" href="{{ route('items.show', $item) }}">
              <div class="card-image">
                <img src="{{ $item->image }}">
                <span class="card-title">{{ $item->artist }}</span>
                <a class="btn-floating halfway-fab waves-effect waves-light red" href="{{ route('items.show', $item) }}"><i class="material-icons">add</i></a>
              </div>
              <div class="card-content">
                <p class="truncate">{{ $item->description }}</p>
                <p class="yellow lighten-1 blue-grey-text text-darken-3"><i class="material-icons" style="font-size:.7em">arrow_forward</i> {{ $item->price }} </p>

              </div>
            </a>
          </div>
        </div>

        @endforeach

    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems, options);
      });
    </script>
@stop
