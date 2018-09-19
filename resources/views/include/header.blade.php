@section('header')
  <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">KAKABET</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class={{Request::is('home') ? 'active': ''}}><a href="/home">Home</a></li>
            <li class={{Request::is('predict') ? 'active': ''}}><a href="/predict">Predict Your Game</a></li>
            <li class={{Request::is('games') ? 'active': ''}}><a href="/games">View sure games</a></li>
            <li class={{Request::is('about') ? 'active': ''}}><a href="/about">About Us</a></li>
            <li class={{Request::is('contact') ? 'active': ''}}><a href="/contact">Contact Us</a></li>
          </ul>
        <div>
          <ul class="nav navbar-nav navbar-right">
            <li class={{Request::is('#') ? 'active': ''}}><a href="/games">Register</a></li>
            <li class={{Request::is('#') ? 'active': ''}}><a href="/login">login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
    </div>
    </nav>
    
	@show