<header>
  <nav>
      <a href="{{ url('') }}"><img id="logo" src="img/logo.png" src="DriverLog Logo"></a>
  @if (Route::has('login'))
      <div class="links">
              <a href="{{ url('') }}" class="button">Home</a>
          @if (Auth::check())
              <a class="button" href="{{ url('/home') }}">Profile</a>
              <a href="{{ url('/logout') }}" class="button">Logout</a>
          @else
              <a class="button" href="{{ url('/login') }}">Login</a>
              <a class="button" href="{{ url('/register') }}">Register</a>
          @endif
              <a href="#" class="smlink button"><img src="img/fb_logo.png" alt="Facebook Logo"></a>
              <a href="#" class="smlink button"><img src="img/insta_logo.png" alt="Instagram Logo"></a>
              <a href="#" class="smlink button"><img src="img/twitter_logo.png" alt="Twitter Logo"></a>
      </div>
  @endif
</nav>
</header>
