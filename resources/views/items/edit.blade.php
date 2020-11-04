@extends('template')

@section('title', $title)

@section('content')

<h3>Éditer: {{ $item->title }}.</h3>

<div class="row">

    <div class="col s6">

    {{ Form::open(['method' => 'put', 'url' =>route('items.update', $item)]) }}
            <form class="col s6">

                @include('errors')

                <div class="row">
                    <div class="input-field col s6">
                        {!! Form::text('title', $item->title, ['class'=>'validate']) !!}
                        {!! Form::label('title', 'Title', ['class'=>'active']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        {!! Form::text('artist', $item->artist, ['class'=>'validate']) !!}
                        {!! Form::label('artist', 'Artist', ['class'=>'active']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        {!! Form::text('label', $item->label, ['class'=>'validate']) !!}
                        {!! Form::label('label', 'Label', ['class'=>'active']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        {!! Form::text('year', $item->year, ['class'=>'validate']) !!}
                        {!! Form::label('year', 'Year', ['class'=>'active']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s10">
                        {!! Form::text('description', $item->description, ['class'=>'validate']) !!}
                        {!! Form::label('description', 'Description', ['class'=>'active']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        {!! Form::text('price', $item->price, ['class'=>'validate']) !!}
                        {!! Form::label('price', 'Price', ['class'=>'active']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        {!! Form::text('image', $item->image, ['class'=>'validate']) !!}
                        {!! Form::label('image', 'Image', ['class'=>'active']) !!}
                    </div>
                </div>

                <button class="red lighten-2 waves-effect waves-light btn-small">Envoyer</button>
            </form>

        {{ Form::close() }}
    </div>

    <div class="col s6">
        <img class="responsive-img z-depth-3" src="{{ URL::asset($item->image) }}">
    </div>
</div>

@stop
