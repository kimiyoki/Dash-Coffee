@if ($low->isNotEmpty())
  <div class="alert-low">
    @foreach ($low as $i)
      <p>⚠ <strong>{{ $i->name }}</strong> is running low — {{ \App\Models\Ingredient::fmt($i->stock) }} {{ $i->unit }} remaining</p>
    @endforeach
  </div>
@endif
