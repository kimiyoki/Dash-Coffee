@extends('layouts.staff')
@section('title', 'Dashboard')
@section('content')
  <h1 class="pos-title">Dashboard</h1>
  <div class="tabs" data-tabs>
    <button class="tab active">Today</button><button class="tab">This week</button><button class="tab">This month</button><button class="tab">This year</button>
  </div>
  <div class="grid-2">
    <div class="card stat"><small>SALES</small><strong>₱0.00</strong></div>
    <div class="card stat"><small>ORDERS</small><strong>0</strong></div>
  </div>
  <div class="card"><h3>Monthly sales</h3><div class="empty">No sales data yet.</div></div>
  <div class="card">
    <h3>Payment split</h3>
    <div class="split"><span>GCash</span><span>Maya</span><span>Cash</span></div>
    <div class="bar"></div>
  </div>
  <div class="card"><h3>Recent orders</h3><div class="empty">No orders yet</div></div>
@endsection
