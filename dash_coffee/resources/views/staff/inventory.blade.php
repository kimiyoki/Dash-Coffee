@extends('layouts.staff')
@section('title', 'Inventory')
@section('content')
  @php $low = $ingredients->filter(fn ($i) => $i->isLow()); $f = fn ($n) => \App\Models\Ingredient::fmt($n); @endphp
  @if (session('ok'))<div class="alert-ok">{{ session('ok') }}</div>@endif
  @if ($errors->any())<div class="alert-low"><p>{{ $errors->first() }}</p></div>@endif
  @include('staff._low', ['low' => $low])

  <div class="inv-layout">
    <section>
      <div class="tbl">
        <div class="tbl-head"><span>#</span><span>Ingredient</span><span>Unit</span><span>Quantity</span><span>Action</span></div>
        @foreach ($ingredients as $i)
          <div class="tbl-row">
            <span>{{ $loop->iteration }}</span>
            <span>{{ $i->name }}</span>
            <span>{{ $i->unit }}</span>
            <span>{{ $f($i->stock) }} @if ($i->isLow())<em class="badge bad">Low</em>@endif</span>
            <button type="button" class="btn btn-soft btn-sm" data-pick="{{ $i->id }}" data-name="{{ $i->name }} ({{ $i->unit }})">Select</button>
          </div>
        @endforeach
      </div>
      @if ($ingredients->isEmpty())<div class="empty">No ingredients yet. Add one using the form on the right.</div>@endif

      <h3 class="gap-top">Stock history</h3>
      <div class="tbl cols-5">
        <div class="tbl-head"><span>Date</span><span>Ingredient</span><span>Action</span><span>Quantity</span><span>Reason</span></div>
        @foreach ($movements as $m)
          <div class="tbl-row">
            <span>{{ $m->created_at->format('M d, g:i A') }}</span>
            <span>{{ $m->ingredient->name }}</span>
            <span>{{ ['in' => 'Stock In', 'out' => 'Stock Out', 'used' => 'Used'][$m->type] ?? $m->type }}</span>
            <span>{{ $m->quantity > 0 ? '+' : '' }}{{ $f($m->quantity) }} {{ $m->ingredient->unit }}</span>
            <span>{{ $m->reason }}</span>
          </div>
        @endforeach
      </div>
      @if ($movements->isEmpty())<div class="empty">No stock movements yet.</div>@endif
    </section>

    <aside class="card">
      <h3>Update stock</h3>
      <form method="POST" action="{{ route('staff.inventory.adjust') }}">
        @csrf
        <input type="hidden" name="ingredient_id" id="pickId" />
        <div class="note" id="pickName">No ingredient selected<small>Click Select in the table</small></div>
        <label>Quantity</label><input type="number" name="quantity" step="0.01" min="0" placeholder="0.0" required />
        <label>Reason</label><input type="text" name="reason" placeholder="e.g. New delivery" />
        <div class="actions">
          <button class="btn btn-soft" name="action" value="in">+ ADD</button>
          <button class="btn btn-soft" name="action" value="out">− DEDUCT</button>
        </div>
      </form>
    </aside>

    <aside class="card">
      <h3>Add ingredient</h3>
      <form method="POST" action="{{ route('staff.inventory.store') }}">
        @csrf
        <label>Ingredient name</label><input type="text" name="name" required />
        <label>Unit</label>
        <select name="unit" required><option value="">Select unit</option><option>pcs</option><option>g</option><option>kg</option><option>ml</option><option>L</option></select>
        <label>Initial stock</label><input type="number" name="stock" step="0.01" min="0" value="0" required />
        <label>Low stock level</label><input type="number" name="low_level" step="0.01" min="0" value="0" required />
        <div class="actions end"><button class="btn btn-primary">Save</button></div>
      </form>
    </aside>
  </div>
  <script>
    document.querySelectorAll('[data-pick]').forEach(function (b) {
      b.addEventListener('click', function () {
        document.getElementById('pickId').value = b.dataset.pick;
        document.getElementById('pickName').textContent = b.dataset.name;
      });
    });
  </script>
@endsection
