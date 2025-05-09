<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/home" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">CV Azka</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="/home" class="{{ Request::is('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="/about" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
            <li><a href="/resume" class="{{ Request::is('resume') ? 'active' : '' }}">Resume</a></li>
            <li><a href="/portfolio" class="{{ Request::is('portfolio') ? 'active' : '' }}">Portfolio</a></li>
            <li><a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
    </div>
  </header>