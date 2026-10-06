@extends('layouts.staff')
@section('title', 'Sales Report')
@section('content')
  <div class="split-layout">
    <section>
      <div class="tabs" data-tabs>
        <button class="tab active">Today</button><button class="tab">This week</button><button class="tab">This month</button><button class="tab">This year</button>
      </div>
      <input class="date-filter" type="date" aria-label="Custom date" />
      <div class="grid-2">
        <div class="card stat"><small>SALES</small><strong>₱0.00</strong></div>
        <div class="card stat"><small>ORDERS</small><strong>0</strong></div>
      </div>
      <div class="card graph-card">
        <div class="sub-head plain"><h3>Sales graph</h3><small>Amount per period</small></div>
        <div class="empty graph-empty">No sales data yet.</div>
      </div>
    </section>
    <aside class="card order-panel">
      <h3>TODAY'S ORDER</h3>
      <div class="empty">No orders yet</div>
      <div class="order-foot report-actions">
        <button class="btn btn-primary">View all orders</button>
        <button class="btn btn-primary" onclick="window.print()">PRINT REPORT</button>
      </div>
    </aside>
  </div>
@endsection
