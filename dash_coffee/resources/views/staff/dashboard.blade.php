@extends('layouts.staff')

@section('title', 'Dashboard')

@section('content')
  <h1>Welcome, {{ auth()->user()->name }}</h1>
  <p class="staff-sub">You are logged in as <strong>{{ auth()->user()->role }}</strong>.</p>

  <div class="staff-cards">
    <a href="{{ route('staff.orders') }}" class="staff-card">
      <h3>Orders</h3>
      <p>Take and view customer orders.</p>
    </a>
    <a href="{{ route('staff.inventory') }}" class="staff-card">
      <h3>Inventory</h3>
      <p>Check and update stock.</p>
    </a>

    @if (auth()->user()->role === 'owner')
      <a href="{{ route('staff.sales') }}" class="staff-card">
        <h3>Sales Report</h3>
        <p>Owner only.</p>
      </a>
      <a href="{{ route('staff.accounts') }}" class="staff-card">
        <h3>Staff Accounts</h3>
        <p>Owner only.</p>
      </a>
    @endif
  </div>
@endsection
