<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('staff.menu', [
            'products' => Product::with('ingredients')->orderBy('name')->get(),
            'ingredients' => Ingredient::orderBy('name')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $d = $request->validate([
            'name' => 'required|string|max:100',
            'category' => 'required|in:Foods,Beverages,Others',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:available,out_of_stock,hidden',
            'recipe.*.ingredient_id' => 'nullable|exists:ingredients,id',
            'recipe.*.quantity' => 'nullable|numeric|gt:0',
        ]);

        $product = Product::create([
            'name' => $d['name'],
            'category' => $d['category'],
            'price' => $d['price'],
            'status' => $d['status'],
        ]);

        $sync = [];
        foreach ($request->input('recipe', []) as $row) {
            if (! empty($row['ingredient_id']) && ! empty($row['quantity'])) {
                $sync[$row['ingredient_id']] = ['quantity' => $row['quantity']];
            }
        }
        $product->ingredients()->sync($sync);

        return back()->with('ok', $product->name . ' added.');
    }

    public function status(Request $request, Product $product)
    {
        $product->update($request->validate(['status' => 'required|in:available,out_of_stock,hidden']));

        return back()->with('ok', 'Status updated.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('ok', 'Product deleted.');
    }
}
