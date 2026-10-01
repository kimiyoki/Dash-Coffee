<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="DashCoffee is a modern coffee and comfort food destination serving premium drinks, savory silog meals, and hearty snacks in a cozy setting."
    />
    <title>@yield('title', 'DashCoffee | Your Daily Coffee Moment')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Playfair+Display:wght@600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  </head>
  <body>
    <header class="site-header">
      <nav class="navbar container" aria-label="Main navigation">
        <div class="brand" aria-label="DashCoffee brand">
          <img src="{{ asset('images/dashcoffee-logo.jpg') }}" alt="DashCoffee logo" class="brand-logo" />
          <span class="brand-text">DASH COFFEE</span>
        </div>
        <div class="nav-links" aria-label="Navigation links">
          <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
          <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
          <a href="{{ route('menu') }}" class="{{ request()->routeIs('menu') ? 'active' : '' }}">Menu</a>
          <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </div>
        <div class="nav-actions">
          <button class="btn btn-ghost">Log In</button>
          <button class="btn btn-primary">Sign Up</button>
        </div>
      </nav>
    </header>

    <main>
      @yield('content')
    </main>

    <footer class="site-footer">
      <div class="container footer-inner">
        <div class="footer-brand">
          <div class="brand" aria-label="DashCoffee footer brand">
            <span class="brand-text">Dash Coffee</span>
          </div>
        </div>
        <div class="footer-links">
          <a href="{{ route('home') }}">Home</a>
          <a href="{{ route('about') }}">About</a>
          <a href="{{ route('menu') }}">Menu</a>
          <a href="{{ route('contact') }}">Contact</a>
        </div>
        <div class="footer-meta">
          <p>© 2026 DashCoffee</p>
          <div class="legal-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms</a>
          </div>
        </div>
      </div>
    </footer>

    @stack('scripts')
  </body>
</html>
