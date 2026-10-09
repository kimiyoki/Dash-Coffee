@extends('layouts.staff')
@section('title', 'Order History')
@section('content')
  <h1 class="pos-title">Order History</h1>
  <div class="tbl cols-7">
    <div class="tbl-head"><span>Order #</span><span>Date / time</span><span>Items</span><span>Total</span><span>Payment</span><span>Status</span><span>Action</span></div>
    @foreach ($orders as $o)
      <div class="tbl-row">
        <span>#{{ $o->id }}</span>
        <span>{{ $o->created_at->format('M d, Y g:i A') }}</span>
        <span class="items-cell">{{ $o->items->map(fn ($i) => $i->qty . '× ' . $i->name)->implode(', ') }}</span>
        <span>₱{{ number_format($o->total, 2) }}</span>
        <span>{{ $o->payment_method }}</span>
        <span><em class="badge available">{{ ucfirst($o->status) }}</em></span>
        <span class="row-actions">
          <a class="btn btn-soft btn-sm" href="{{ route('staff.receipt', $o) }}">View</a>
          <a class="btn btn-soft btn-sm" href="{{ route('staff.receipt', [$o, 'print' => 1]) }}">Print</a>
        </span>
      </div>
    @endforeach
  </div>
  @if ($orders->isEmpty())<div class="empty">No orders yet.</div>@endif
  <div class="pager">{{ $orders->links() }}</div>
@endsection
