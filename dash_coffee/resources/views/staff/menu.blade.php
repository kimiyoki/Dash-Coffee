@extends('layouts.staff')
@section('title', 'Manage Menu')
@section('content')
  @if (session('ok'))<div class="alert-ok">{{ session('ok') }}</div>@endif
  @if ($errors->any())<div class="alert-low"><p>{{ $errors->first() }}</p></div>@endif
  <div class="menu-layout">
    <aside class="card">
      <h3>Products</h3>
      @forelse ($products as $p)
        <div class="prod-row">
          <div><strong>{{ $p->name }}</strong><small>{{ $p->category }} · ₱{{ number_format($p->price, 2) }}</small></div>
          <span class="badge {{ $p->displayStatus() }}">{{ ['available' => 'Available', 'out_of_stock' => 'Out of Stock', 'hidden' => 'Hidden'][$p->displayStatus()] }}</span>
          <form method="POST" action="{{ route('staff.menu.status', $p) }}">
            @csrf @method('PATCH')
            <select name="status" onchange="this.form.submit()">
              @foreach (['available' => 'Available', 'out_of_stock' => 'Out of Stock', 'hidden' => 'Hidden'] as $k => $v)
                <option value="{{ $k }}" @selected($p->status === $k)>{{ $v }}</option>
              @endforeach
            </select>
          </form>
          <form method="POST" action="{{ route('staff.menu.destroy', $p) }}" onsubmit="return confirm('Delete this product?')">
            @csrf @method('DELETE')
            <button class="btn btn-danger btn-sm">Delete</button>
          </form>
        </div>
      @empty
        <div class="empty">No products yet.</div>
      @endforelse
    </aside>

    <section class="card">
      <h3>Add product</h3>
      <form method="POST" action="{{ route('staff.menu.store') }}">
        @csrf
        <div class="fields">
          <label>Product name</label><input type="text" name="name" required />
          <label>Category</label>
          <select name="category" required><option value="">Select category</option><option>Foods</option><option>Beverages</option><option>Others</option></select>
          <label>Price</label><input type="number" name="price" step="0.01" min="0" required />
          <label>Status</label>
          <select name="status"><option value="available">Available</option><option value="out_of_stock">Out of Stock</option><option value="hidden">Hidden</option></select>
        </div>
        <div class="sub-head"><h3>Ingredients (recipe per 1 product)</h3><button type="button" class="btn btn-primary btn-sm" id="addRow">+ Add Ingredient</button></div>
        <div id="recipeRows"></div>
        <div class="actions end"><button class="btn btn-primary">Save</button></div>
      </form>
    </section>
  </div>
  <template id="rowTpl">
    <div class="recipe-row">
      <select name="recipe[__N__][ingredient_id]">
        <option value="">Select ingredient</option>
        @foreach ($ingredients as $i)<option value="{{ $i->id }}">{{ $i->name }} ({{ $i->unit }})</option>@endforeach
      </select>
      <input type="number" name="recipe[__N__][quantity]" step="0.01" min="0" placeholder="Qty used" />
    </div>
  </template>
  <script>
    var n = 0, box = document.getElementById('recipeRows'), tpl = document.getElementById('rowTpl').innerHTML;
    function addRow() { box.insertAdjacentHTML('beforeend', tpl.replace(/__N__/g, n++)); }
    document.getElementById('addRow').addEventListener('click', addRow);
    addRow();
  </script>
@endsection
