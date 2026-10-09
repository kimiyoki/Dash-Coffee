<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\StockMovement;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return view('staff.inventory', [
            'ingredients' => Ingredient::orderBy('name')->get(),
            'movements' => StockMovement::with('ingredient')->latest()->take(40)->get(),
        ]);
    }

    public function store(Request $request)
    {
        $d = $request->validate([
            'name' => 'required|string|max:100',
            'unit' => 'required|in:pcs,g,kg,ml,L',
            'stock' => 'required|numeric|min:0',
            'low_level' => 'required|numeric|min:0',
        ]);

        $ing = Ingredient::create($d);
        if ($d['stock'] > 0) {
            $this->log($ing, 'in', $d['stock'], 'Initial stock');
        }

        return back()->with('ok', $ing->name . ' added.');
    }

    public function adjust(Request $request)
    {
        $d = $request->validate([
            'ingredient_id' => 'required|exists:ingredients,id',
            'action' => 'required|in:in,out',
            'quantity' => 'required|numeric|gt:0',
            'reason' => 'nullable|string|max:150',
        ]);

        $ing = Ingredient::findOrFail($d['ingredient_id']);
        $qty = (float) $d['quantity'];

        if ($d['action'] === 'out' && $qty > (float) $ing->stock) {
            return back()->withErrors(['quantity' => 'Not enough stock to deduct.']);
        }

        $signed = $d['action'] === 'in' ? $qty : -$qty;
        $ing->stock = (float) $ing->stock + $signed;
        $ing->save();

        $this->log($ing, $d['action'], $signed, $d['reason'] ?: ($d['action'] === 'in' ? 'New delivery' : 'Adjustment'));

        return back()->with('ok', 'Stock updated.');
    }

    private function log(Ingredient $ing, string $type, $qty, string $reason): void
    {
        StockMovement::create([
            'ingredient_id' => $ing->id,
            'type' => $type,
            'quantity' => $qty,
            'reason' => $reason,
            'user_id' => auth()->id(),
        ]);
    }
}
