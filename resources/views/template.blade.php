<!DOCTYPE html>
<html lang="fr">
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Oswald|Roboto+Mono&display=swap" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}"  media="screen,projection"/>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!--Let browser know website is optimized for mobile-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
  </head>

  <body>

    <header>
        @include("header")
    </header>

    <main>

      <div class="container">

        @yield('content')

      </div>

    </main>

    <footer>
      @include("footer")
    </footer>
    <!--JavaScript at end of body for optimized loading src="js/bin/materialize.min.js"-->
    <script type="text/javascript" src="{{ asset('js/bin/materialize.js') }}"></script>
  </body>
</html>
