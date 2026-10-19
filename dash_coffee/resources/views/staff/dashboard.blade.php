@extends('layouts.staff')
@section('title', 'Dashboard')
@section('content')
  <h1 class="pos-title">Dashboard</h1>
  @include('staff._low', ['low' => $low])
  <div class="tabs">
    @foreach (['today' => 'Today', 'week' => 'This week', 'month' => 'This month', 'year' => 'This year'] as $k => $label)
      <a class="tab {{ $period === $k ? 'active' : '' }}" href="{{ route('staff.dashboard', ['period' => $k]) }}">{{ $label }}</a>
    @endforeach
  </div>
  <div class="grid-2">
    <div class="card stat"><small>SALES</small><strong>₱{{ number_format($sales, 2) }}</strong></div>
    <div class="card stat"><small>ORDERS</small><strong>{{ $count }}</strong></div>
  </div>
  <div class="card">
    <h3>Payment split</h3>
    @foreach (['GCash', 'Maya', 'Cash'] as $m)
      @php $amt = $payments[$m] ?? 0; $pct = $sales > 0 ? round($amt / $sales * 100) : 0; @endphp
      <div class="split"><span>{{ $m }}</span><span>₱{{ number_format($amt, 2) }} ({{ $pct }}%)</span></div>
      <div class="bar"><div class="bar-fill" style="width: {{ $pct }}%"></div></div>
    @endforeach
  </div>
  <div class="card">
    <h3>Recent orders</h3>
    @forelse ($recent as $o)
      <div class="tbl-row recent-row">
        <span>#{{ $o->id }}</span><span>{{ $o->created_at->format('M d, g:i A') }}</span><span>{{ $o->payment_method }}</span><strong>₱{{ number_format($o->total, 2) }}</strong>
      </div>
    @empty
      <div class="empty">No orders yet</div>
    @endforelse
    <p class="more"><a href="{{ route('staff.history') }}">View all orders &rarr;</a></p>
  </div>
@endsection
