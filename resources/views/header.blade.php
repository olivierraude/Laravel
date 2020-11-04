<nav>
    <div class="nav-wrapper">
        <a href="https://e1895083.webdev.cmaisonneuve.qc.ca/laravel/public/home" class="brand-logo"><img src="{{ asset('images/vintage-radio-tower-logo2.png') }}" alt="logo" height="65""></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="https://e1895083.webdev.cmaisonneuve.qc.ca/laravel/public/home">Home</a></li>
            <li><a href="https://e1895083.webdev.cmaisonneuve.qc.ca/laravel/public/about">About</a></li>
            @if (Auth::check())
                <li><a class="" href="https://e1895083.webdev.cmaisonneuve.qc.ca/laravel/public/logout">Logout</a></li>
                <li><a class="white red-text text-lighten-2 waves-effect waves-light btn-small hoverable"  href="{{ route('items.create') }}">Nouvelle sortie</a></li>
            @else
                <li><a class="" href="https://e1895083.webdev.cmaisonneuve.qc.ca/laravel/public/login">Login</a></li>
            @endif
        </ul>
    </div>
</nav>
