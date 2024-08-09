<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\CampGround;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::with(['user', 'campground'])->get();
        return view('frontend.ratings.index', compact('ratings'));
    }


    public function store(Request $request)
    {
      // dd($request->camp_ground_id);
        $request->validate([
            'camp_ground_id' => 'required|exists:camp_grounds,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:500',
        ]);

           // تحقق من وجود تقييم سابق
        $existingRating = Rating::where('user_id', auth()->id())
        ->where('camp_ground_id', $request->camp_ground_id)
        ->first();
/*
        if ($existingRating) {
          //  dd($request->campground_id);
            return redirect()->back()
                ->with('error', 'لا يمكنك تقديم تقييم أكثر من مرة لنفس المخيم.');
        }
*/
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
        return view('backend.campGrounds.ratings', compact('ratings'));
    }
    // app/Http/Controllers/CampgroundController.php
    public function showallratings($id)

    {
       // $ratings = Rating::where('camp_ground_id', $id)->get();
        $campground = Campground::with('ratings.user')->findOrFail($id);
        return view('frontend.campground.show', compact('campground','ratings'));
    }


}
