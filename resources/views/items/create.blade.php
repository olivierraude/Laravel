@extends('template')

@section('title', $title)

@section('content')

<h3>Ajouter une sortie.</h3>

<div class="row">

    <div class="col s6">
    {{ Form::open(['url' =>route('items.store')]) }}
            <form class="col s6">

                @include('errors')

                <div class="row">
                    <div class="input-field col s6">
                        {!! Form::text('title', null, ['class'=>'validate']) !!}
                        {!! Form::label('title', 'Title') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        {!! Form::text('artist', null, ['class'=>'validate']) !!}
                        {!! Form::label('artist', 'Artist') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        {!! Form::text('label', null, ['class'=>'validate']) !!}
                        {!! Form::label('label', 'Label') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        {!! Form::text('year', null, ['class'=>'validate']) !!}
                        {!! Form::label('year', 'Year') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s10">
                        {!! Form::text('description', null, ['class'=>'validate']) !!}
                        {!! Form::label('description', 'Description') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        {!! Form::text('price', null, ['class'=>'validate']) !!}
                        {!! Form::label('price', 'Price') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        {!! Form::text('image', null, ['class'=>'validate']) !!}
                        {!! Form::label('image', 'Image') !!}
                    </div>
                </div>

                {{-- upload file --}}
                
                {{-- <div class="row">
                    <div class="file-field input-field col s6">
                        <div class="btn">
                        <span>File</span>
                        <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div> --}}

                <button class="red lighten-2 waves-effect waves-light btn-small">Envoyer</button>
            </form>

        {{ Form::close() }}
    </div>

</div>

@stop
