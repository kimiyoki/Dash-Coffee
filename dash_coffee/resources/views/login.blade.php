@extends('layouts.app')

@section('title', 'Log In | DashCoffee')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />

<section class="login-section">
  <div class="container">
    <div class="login-card">
      <div class="login-form-side">
        <div class="login-avatar" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <circle cx="12" cy="8" r="4.2" />
            <path d="M3.5 21c0-4.6 3.8-7.2 8.5-7.2s8.5 2.6 8.5 7.2c0 .6-.4 1-1 1H4.5c-.6 0-1-.4-1-1z" />
          </svg>
        </div>

        <form class="login-form" method="POST" action="{{ route('login.submit') }}">
          @csrf

          @if ($errors->any())
            <p class="login-message">{{ $errors->first() }}</p>
          @endif

          <label for="username">Username</label>
          <div class="login-field">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <circle cx="12" cy="8" r="4" />
              <path d="M4 21c0-4.4 3.6-7 8-7s8 2.6 8 7z" />
            </svg>
            <input type="text" id="username" name="username" placeholder="Enter Username" value="{{ old('username') }}" autocomplete="username" required />
          </div>

          <label for="password">Password</label>
          <div class="login-field">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <rect x="5" y="11" width="14" height="10" rx="2" />
              <path d="M8 11V7a4 4 0 0 1 8 0v4" />
            </svg>
            <input type="password" id="password" name="password" placeholder="Enter Password" autocomplete="current-password" required />
          </div>

          <button type="submit" class="btn btn-primary login-btn">LOGIN &rarr;</button>
        </form>
      </div>

      <div class="login-welcome-side">
        <h1>Welcome Back</h1>
        <p>Point of Sale and Inventory Management System</p>
      </div>
    </div>
  </div>
</section>
@endsection
