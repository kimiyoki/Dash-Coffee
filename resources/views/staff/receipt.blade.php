@extends('layouts.staff')
@section('title', 'Receipt #' . $order->id)
@section('content')
  <div class="receipt">
    <h2>DASH COFFEE</h2>
    <p class="center">Eastwood Residences, Rodriguez, Rizal</p>
    <hr />
    <p>Order #{{ $order->id }}<br>{{ $order->created_at->format('M d, Y g:i A') }}<br>Cashier: {{ $order->user->name ?? '—' }}</p>
    <hr />
    @foreach ($order->items as $i)
      <div class="r-line"><span>{{ $i->name }} × {{ $i->qty }}</span><span>₱{{ number_format($i->price * $i->qty, 2) }}</span></div>
    @endforeach
    <hr />
    <div class="r-line total-line"><span>TOTAL</span><span>₱{{ number_format($order->total, 2) }}</span></div>
    @if ($order->payment_method === 'Cash')
      <div class="r-line"><span>Cash</span><span>₱{{ number_format($order->cash_received, 2) }}</span></div>
      <div class="r-line"><span>Change</span><span>₱{{ number_format($order->change_amount, 2) }}</span></div>
    @else
      <div class="r-line"><span>{{ $order->payment_method }}</span><span>Ref: {{ $order->reference ?: '—' }}</span></div>
    @endif
    <hr />
    <p class="center">Thank you! Take a dash, stay a while.</p>
  </div>
  <div class="receipt-actions no-print">
    <button class="btn btn-primary" onclick="window.print()">Print Receipt</button>
    <a class="btn btn-soft" href="{{ route('staff.orders') }}">New Order</a>
    <a class="btn btn-soft" href="{{ route('staff.history') }}">Order History</a>
  </div>
  @if (request('print'))<script>window.addEventListener('load', function () { window.print(); });</script>@endif
@endsection
