<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:500',
        ]);

        Feedback::create([
            'message' => $request->message,
        ]);

        return back()->with('success', 'Thank you for your feedback!');
    }
}