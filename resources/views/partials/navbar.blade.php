<nav class="navbar">
  <div class="navbar-inner">
    <div class="navbar-logo">
      <a class="navbar-logo-link" href="/">
        <img class="navbar-logo-image" src="/img/centrstage-logo-light.png">
      </a>
    </div>
    <div class="navbar-links">
      <a class="navbar-link" href="/streams" >Live Concert Streams</a>
      <a class="navbar-link" href="/about" >About</a>
      @if(!Auth::check())
        <a class="navbar-link button is-primary" href="/signup">
          Sign Up
        </a>
      @elseif(Auth::user()->is_admin)
        <a class="navbar-link button is-primary" href="/admin">
          Admin Panel
        </a>
      @endif
    </div>
  </div>
</nav>