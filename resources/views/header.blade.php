<nav>
    <div class="nav-wrapper">
        <a href="http://localhost/laravel/public/home" class="brand-logo"><img src="{{ asset('images/vintage-radio-tower-logo2.png') }}" alt="logo" height="65""></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="http://localhost/laravel/public/home">Home</a></li>
            <li><a href="http://localhost/laravel/public/about">About</a></li>
            @if (Auth::check())
                <li><a class="" href="http://localhost/laravel/public/logout">Logout</a></li>
                <li><a class="white red-text text-lighten-2 waves-effect waves-light btn-small hoverable"  href="{{ route('items.create') }}">Nouvelle sortie</a></li>
            @else
                <li><a class="" href="http://localhost/laravel/public/login">Login</a></li>
            @endif
        </ul>
    </div>
</nav>
