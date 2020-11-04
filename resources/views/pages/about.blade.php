@extends('template')

@section('title', $title)

@section('content')

<div class="row">
        <div class="col s6">
            <img src="images/antenna_about.jpg" alt="antenna" width="100%">
        </div>

        <div class="col s6">
            <h1>Hello World!</h1>

            <p>Bienvenue sur La Face B, une première application publiée par Olivier sous Laravel avec Materialize!</p>
            <p>J'aurais aimé en mettre plus, merci pour tout, j'espère te recroiser!</p>
        </div>
    </div>

@stop
