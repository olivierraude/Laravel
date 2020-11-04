<footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l2 s12">
            <a href="https://e1895083.webdev.cmaisonneuve.qc.ca/laravel/public/home" class="brand-logo"><img src="{{ asset('images/vintage-radio-tower-logo2.png') }}" alt="logo" height="150"></a>
        </div>
        <div class="col l7 s12">
          <h5 class="white-text">La Face B</h5>
          <p class="grey-text text-lighten-4">Si j'avais un sous-sol, ça ressemblerait pas mal à ça...</p>
        </div>
        <div class="col l1 offset-l2 s12">
          <ul>
            <li><a class="grey-text text-lighten-3" href="https://e1895083.webdev.cmaisonneuve.qc.ca/laravel/public/home"> HOME </a></li>
            @if (Auth::check())
              <li><a class="grey-text text-lighten-3" href="https://e1895083.webdev.cmaisonneuve.qc.ca/laravel/public/logout"> LOGOUT </a></li>
            @else
              <li><a class="grey-text text-lighten-3" href="https://e1895083.webdev.cmaisonneuve.qc.ca/laravel/public/login"> LOGIN </a></li>
            @endif
            <li><a class="grey-text text-lighten-3" href="https://e1895083.webdev.cmaisonneuve.qc.ca/laravel/public/about">ABOUT</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2020 Reprise de stage O.Raude - e1895083
      </div>
    </div>
</footer>
