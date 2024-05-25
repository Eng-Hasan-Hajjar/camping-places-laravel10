<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guide;
// This will work and generate everything properly.
use App\Models\Post;
class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guides = Guide::latest()->paginate(5);

        return view('backend.guides.all',compact('guides'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.guides.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $messages = [
        'name.required' => 'حقل  الاسم مطلوب',
        'phone.required' => 'حقل رقم الهاتف مطلوب',
        'phone.numeric' => 'هاتف المستخدم غير صالح',
        'is_free.required' => 'حقل نوع الحالة مطلوب',

    ];

        $request->validate([
            'name' => 'required',
            'phone'=>  'required|numeric',

            'is_free'=> 'required',
        ], $messages);

        Guide::create($request->all());

        return redirect()->route('guides.index')
                        ->with('success','guide created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guide $guide)
    {
        return view('backend.guides.show',compact('guide'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guide $guide)
    {
        return view('backend.guides.edit',compact('guide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guide $guide)
    {
        $messages = [
            'name.required' => 'حقل  الاسم مطلوب',
            'phone.required' => 'حقل رقم الهاتف مطلوب',
            'phone.numeric' => 'هاتف المستخدم غير صالح',
            'is_free.required' => 'حقل نوع الحالة مطلوب',




        ];
        $request->validate([
            'name' => 'required',
            'phone'=>  'required|numeric',
            'is_free'=> 'required',

        ], $messages);

        $guide->update($request->all());

        return redirect()->route('guides.index')
                        ->with('success','guide updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guide $guide)
    {
        $guide->delete();

        return redirect()->route('guides.index')
                        ->with('success','guide deleted successfully');
    }

}
