<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, nofollow" />
    <title>@yield('title', 'Staff') | DashCoffee</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/staff.css') }}" />
  </head>
  <body class="staff-body">
    <header class="staff-header">
      <div class="staff-bar">
        <a href="{{ route('staff.dashboard') }}" class="staff-brand">
          <img src="{{ asset('images/dashcoffee-logo.jpg') }}" alt="DashCoffee logo" />
          <span>DASH COFFEE</span>
        </a>

        <nav class="staff-nav" aria-label="Staff navigation">
          <a href="{{ route('staff.dashboard') }}" class="{{ request()->routeIs('staff.dashboard') ? 'active' : '' }}">Dashboard</a>
          <a href="{{ route('staff.orders') }}" class="{{ request()->routeIs('staff.orders') ? 'active' : '' }}">Orders</a>
          <a href="{{ route('staff.inventory') }}" class="{{ request()->routeIs('staff.inventory') ? 'active' : '' }}">Inventory</a>

          @if (auth()->user()->role === 'owner')
            <a href="{{ route('staff.sales') }}" class="{{ request()->routeIs('staff.sales') ? 'active' : '' }}">Sales Report</a>
            <a href="{{ route('staff.accounts') }}" class="{{ request()->routeIs('staff.accounts') ? 'active' : '' }}">Staff Accounts</a>
          @endif
        </nav>

        <div class="staff-user">
          <span class="staff-role">{{ ucfirst(auth()->user()->role) }}</span>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-primary staff-logout">Log Out</button>
          </form>
        </div>
      </div>
    </header>

    <main class="staff-main">
      @yield('content')
    </main>
  </body>
</html>
