@extends('layouts.staff')
@section('title', 'Manage Menu')
@section('content')
  <div class="toolbar">
    <div class="tabs" data-tabs>
      <button class="tab active">All Products</button><button class="tab">Foods</button><button class="tab">Beverages</button><button class="tab">Others</button>
    </div>
    <div class="toolbar-right"><input class="search" type="search" placeholder="Search" /><button class="btn btn-primary">+ ADD PRODUCT</button></div>
  </div>
  <div class="menu-layout">
    <aside class="card"><h3>Products</h3><div class="empty">No products yet.</div></aside>
    <section class="card">
      <div class="prod-form">
        <div class="prod-img">
          <img src="{{ asset('images/dashcoffee-logo.jpg') }}" alt="Product image" />
          <button class="btn btn-soft">Change Image</button>
          <label class="switch"><input type="checkbox" checked /> <span>Available</span></label>
        </div>
        <div class="fields">
          <label>Product name</label><input type="text" />
          <label>Category</label><select><option value="">Select category</option><option>Foods</option><option>Beverages</option><option>Others</option></select>
          <label>Price</label><input type="number" step="0.01" />
        </div>
      </div>
      <div class="sub-head"><h3>Ingredients</h3><button class="btn btn-primary btn-sm">+ Add Ingredient</button></div>
      <div class="tbl"><div class="tbl-head"><span>#</span><span>Ingredient</span><span>Unit</span><span>Quantity</span><span>Action</span></div></div>
      <div class="empty">No ingredients added yet.</div>
      <div class="actions end"><button class="btn btn-danger">Cancel</button><button class="btn btn-primary">Save</button></div>
    </section>
  </div>
@endsection
