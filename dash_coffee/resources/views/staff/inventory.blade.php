@extends('layouts.staff')
@section('title', 'Inventory')
@section('content')
  <div class="inv-layout">
    <section>
      <input class="search wide" type="search" placeholder="Search ingredients" />
      <div class="tabs" data-tabs>
        <button class="tab active">All Products</button><button class="tab">Foods</button><button class="tab">Beverages</button><button class="tab">Others</button>
      </div>
      <div class="tbl"><div class="tbl-head"><span>#</span><span>Ingredient</span><span>Unit</span><span>Quantity</span><span>Action</span></div></div>
      <div class="empty">No ingredients yet. Add one using the form on the right.</div>
    </section>
    <aside class="card">
      <h3>Update stock</h3>
      <div class="note">No ingredient selected<small>Click a pencil in the table</small></div>
      <label>Quantity (pcs)</label><input type="number" placeholder="0.0" />
      <div class="actions"><button class="btn btn-soft">+ ADD</button><button class="btn btn-soft">− DEDUCT</button></div>
      <div class="actions end"><button class="btn btn-danger">Cancel</button><button class="btn btn-primary">Save</button></div>
    </aside>
    <aside class="card">
      <h3>Add ingredient</h3>
      <label>Ingredient name</label><input type="text" />
      <label>Unit</label><select><option value="">Select unit</option><option>pcs</option><option>g</option><option>ml</option></select>
      <label>Initial stock</label><input type="number" value="1" />
      <label>Low stock level</label><input type="number" />
      <div class="actions end"><button class="btn btn-danger">Cancel</button><button class="btn btn-primary">Save</button></div>
    </aside>
  </div>
@endsection
