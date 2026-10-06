@extends('layouts.staff')
@section('title', 'Order Entry')
@section('content')
  <div class="split-layout">
    <section>
      <div class="toolbar">
        <div class="tabs" data-tabs>
          <button class="tab active">All Products</button><button class="tab">Foods</button><button class="tab">Beverages</button><button class="tab">Others</button>
        </div>
        <input class="search" type="search" placeholder="Search products" />
      </div>
      <div class="empty">No products yet. Add them in Manage Menu.</div>
    </section>
    <aside class="card order-panel">
      <h3>Current order</h3>
      <div class="empty">Tap a product to add it.</div>
      <div class="order-foot">
        <div class="total"><span>Total</span><strong>₱0.00</strong></div>
        <label>Payment method</label>
        <select id="payMethod"><option>GCash</option><option>Maya</option><option>Cash</option></select>
        <label>Reference number</label>
        <input id="payRef" type="text" placeholder="Reference number" />
        <div class="actions"><button class="btn btn-danger">Clear Order</button><button class="btn btn-primary">Confirm Order</button></div>
      </div>
    </aside>
  </div>
@endsection
