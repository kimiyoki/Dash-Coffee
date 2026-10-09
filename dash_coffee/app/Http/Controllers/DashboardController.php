<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $period = $request->query('period', 'today');
        $from = match ($period) {
            'week' => now()->startOfWeek(),
            'month' => now()->startOfMonth(),
            'year' => now()->startOfYear(),
            default => now()->startOfDay(),
        };

        $q = Order::where('status', 'completed')->where('created_at', '>=', $from);

        return view('staff.dashboard', [
            'period' => $period,
            'sales' => (clone $q)->sum('total'),
            'count' => (clone $q)->count(),
            'payments' => (clone $q)->selectRaw('payment_method, SUM(total) as t')->groupBy('payment_method')->pluck('t', 'payment_method'),
            'recent' => Order::with('items')->latest()->take(5)->get(),
            'low' => Ingredient::whereColumn('stock', '<=', 'low_level')->orderBy('name')->get(),
        ]);
    }
}
