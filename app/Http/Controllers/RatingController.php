<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'camp_ground_id' => 'required|exists:camp_grounds,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:500',
        ]);

        Rating::create([
            'user_id' => Auth::id(),
            'camp_ground_id' => $request->camp_ground_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'تم إضافة تقييمك بنجاح.');
    }

    public function show($camp_ground_id)
    {
        $ratings = Rating::where('camp_ground_id', $camp_ground_id)->get();
        return view('camp_grounds.ratings', compact('ratings'));
    }
}
