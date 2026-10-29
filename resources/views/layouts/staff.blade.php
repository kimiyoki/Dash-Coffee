<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow" />
  <title>@yield('title', 'Staff') | DashCoffee</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/staff.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/pos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/mobile.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <style>
    /* Hamburger button: stays put on screen while the page scrolls */
    .pos-toggle { position:fixed !important; top:16px !important; bottom:auto !important;
                  margin:0 !important; transform:none !important; z-index:1001 !important; }
    .pos-toggle:not(.open):not([aria-expanded="true"]) { left:16px !important; }
  </style>

  <script>
    // Keep the mobile menu open between pages: mark <html> before the first paint
    try {
      if (sessionStorage.getItem('posDrawerOpen') === '1' &&
          window.matchMedia('(max-width: 768px)').matches) {
        document.documentElement.classList.add('drawer-pre');
      }
    } catch (e) {}
  </script>
</head>

<body class="staff-body">
  @if (session('just_logged_in'))
    <div class="welcome-overlay">
      <div class="welcome-box">
        <img src="{{ asset('images/dashcoffee-logo.jpg') }}" alt="DashCoffee logo" />
        <h2>Welcome, {{ auth()->user()->name }}</h2>
        <p>Opening your dashboard...</p>
      </div>
    </div>
  @endif

  @php $owner = auth()->user()->role === 'owner'; @endphp
  <div class="pos">
    <button class="pos-toggle" id="posToggle" aria-label="Toggle menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
    <div class="pos-backdrop" id="posBackdrop"></div>
    <aside class="pos-side">
      <a href="{{ route('staff.dashboard') }}" class="pos-brand">
        <img src="{{ asset('images/dashcoffee-logowhite.png') }}" alt="DashCoffee logo" />
        <div class="pos-brand-text">
          <span>DASH COFFEE</span>
        </div>
      </a>
      <div class="pos-user">
        <span class="pos-avatar">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
        <span>{{ auth()->user()->name }}</span>
      </div>
      <nav class="pos-nav" aria-label="Staff navigation">
        <div class="pos-group">
          <button type="button" class="pos-group-label">Main <i class="bi bi-chevron-down"></i></button>
          <div class="pos-group-items">
            <a href="{{ route('staff.dashboard') }}"
              class="{{ request()->routeIs('staff.dashboard') ? 'active' : '' }}">
              <img src="{{ asset('images/layout-dashboard.svg') }}" alt="" class="pos-icon"> Dashboard</a>
          </div>
        </div>

        <div class="pos-group">
          <button type="button" class="pos-group-label">Orders <i class="bi bi-chevron-down"></i></button>
          <div class="pos-group-items">
            <a href="{{ route('staff.orders') }}" class="{{ request()->routeIs('staff.orders') ? 'active' : '' }}">
              <img src="{{ asset('images/calculator.svg') }}" alt="" class="pos-icon"> Order Entry</a>
            <a href="{{ route('staff.history') }}" class="{{ request()->routeIs('staff.history','staff.receipt') ? 'active' : '' }}">
              <img src="{{ asset('images/clipboard-clock.svg') }}" alt="" class="pos-icon"> Order History</a>
          </div>
        </div>

        <div class="pos-group">
          <button type="button" class="pos-group-label">Menu &amp; Stock <i class="bi bi-chevron-down"></i></button>
          <div class="pos-group-items">
            @if ($owner)
              <a href="{{ route('staff.menu') }}" class="{{ request()->routeIs('staff.menu') ? 'active' : '' }}">
                <img src="{{ asset('images/file-pen.svg') }}" alt="" class="pos-icon"> Manage Menu</a>
            @endif
            <a href="{{ route('staff.inventory') }}"
              class="{{ request()->routeIs('staff.inventory', 'staff.inv-reports') ? 'active' : '' }}">
              <img src="{{ asset('images/package.svg') }}" alt="" class="pos-icon"> Inventory</a>
          </div>
        </div>

        @if ($owner)
          <div class="pos-group">
            <button type="button" class="pos-group-label">Analytics <i class="bi bi-chevron-down"></i></button>
            <div class="pos-group-items">
              <a href="{{ route('staff.sales') }}" class="{{ request()->routeIs('staff.sales') ? 'active' : '' }}">
                <img src="{{ asset('images/chart-column-big.svg') }}" alt="" class="pos-icon"> Sales Report</a>
            </div>
          </div>

          <div class="pos-group">
            <button type="button" class="pos-group-label">Administration <i class="bi bi-chevron-down"></i></button>
            <div class="pos-group-items">
              <a href="{{ route('staff.accounts') }}"
                class="{{ request()->routeIs('staff.accounts') ? 'active' : '' }}">
                <img src="{{ asset('images/folder-users.svg') }}" alt="" class="pos-icon"> Staff</a>
            </div>
          </div>
        @endif
      </nav>
      <form method="POST" action="{{ route('logout') }}" class="pos-logout">
        @csrf
        <button type="submit">Log Out</button>
      </form>
    </aside>
    <main class="pos-main">@yield('content')</main>
  </div>
  <script src="{{ asset('js/pos.js') }}"></script>
  <script>
    (function () {
      var KEY = 'posDrawerOpen';
      var html = document.documentElement;
      var toggle = document.getElementById('posToggle');
      var side = document.querySelector('.pos-side');
      var nav = document.querySelector('.pos-nav');
      var logout = document.querySelector('.pos-logout');
      if (!toggle || !side) { html.classList.remove('drawer-pre'); return; }

      function isPhone() { return getComputedStyle(toggle).display !== 'none'; }   // hamburger shown = phone
      function isOpen()  { return side.getBoundingClientRect().right > 40; }       // drawer on screen

      // 1) The drawer is already showing open (drawer-pre). Put pos.js in the open
      //    state too, then drop the helper class. Nothing moves on screen.
      if (html.classList.contains('drawer-pre')) {
        toggle.click();
        void document.body.offsetHeight;
        requestAnimationFrame(function () {
          requestAnimationFrame(function () { html.classList.remove('drawer-pre'); });
        });
      }

      // 2) Tap anywhere outside the drawer (the grey page area) = same as the X
      document.addEventListener('click', function (e) {
        if (!isPhone() || !isOpen()) return;
        if (e.target.closest('.pos-side, #posToggle')) return;
        e.preventDefault();
        e.stopPropagation();      // don't also click whatever is under the grey area
        toggle.click();
      }, true);

      // 3) Remember the state for the next page
      if (nav) nav.addEventListener('click', function (e) {
        if (e.target.closest('a')) sessionStorage.setItem(KEY, '1');   // link tapped -> stay open
      });
      toggle.addEventListener('click', function () { sessionStorage.setItem(KEY, '0'); });  // X or outside tap -> stay closed

      // 4) Collapse / expand sidebar groups
      document.querySelectorAll('.pos-group-label').forEach(function (btn) {
        btn.addEventListener('click', function () {
          btn.parentElement.classList.toggle('collapsed');
        });
      });

      // 5) Smooth fading scroll indicator, visible only while scrolling
      if (nav) {
        if (getComputedStyle(side).position === 'static') side.style.position = 'relative';
        var thumb = document.createElement('div');
        thumb.className = 'pos-thumb';
        side.appendChild(thumb);
        var hideTimer;
        function updateThumb() {
          var h = nav.clientHeight, sh = nav.scrollHeight;
          if (sh <= h + 1) { thumb.style.display = 'none'; return; }
          thumb.style.display = 'block';
          var th = Math.max(30, h * h / sh);
          var top = nav.offsetTop + (nav.scrollTop / (sh - h)) * (h - th);
          thumb.style.height = th + 'px';
          thumb.style.transform = 'translateY(' + top + 'px)';
        }
        nav.addEventListener('scroll', function () {
          updateThumb();
          thumb.classList.add('show');
          clearTimeout(hideTimer);
          hideTimer = setTimeout(function () { thumb.classList.remove('show'); }, 900);
        }, { passive: true });
        window.addEventListener('resize', updateThumb);
        updateThumb();
      }
      if (logout) logout.addEventListener('submit', function () { sessionStorage.setItem(KEY, '0'); });
    })();
  </script>
</body>
</html>