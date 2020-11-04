@extends('template')

@section('title', $title)

@section('content')

<div class="row">
    <div class="col l5 s6 center-align">
        <div style="margin-top:30px">
            <img class="responsive-img z-depth-3" src="{{ URL::asset($item->image) }}">
        </div>
    </div>

    <div class="col l6 s6">
        <div class="">
            <h2>{{ $item->artist }}</h2>
            <h5>{{ $item->label }}, {{ $item->year }}.</h5>

            <p>{{ $item->description }}</p>
            <h5>{{ $item->price }}</h5>
        </div>

        @if (Auth::check())
        <div class="row">

            <div class="col s2">
                <a class="red lighten-2 waves-effect waves-light btn-small" href="{{ route('items.edit', $item) }}">Éditer</a>
            </div>

            <div class="col s2">
                {{ Form::open(['method' => 'DELETE', 'url' =>route('items.destroy', $item)]) }}
                    <form>
                        <button class="red lighten-2 waves-effect waves-light btn-small">Supprimer</button>
                    </form>
                {{ Form::close() }}
            </div>
        </div>
        @endif
        <div>
            <a class="red lighten-2 waves-effect waves-light btn-small" href="">Ajouter au panier</a>
        </div>
    </div>
</div>

@stop
