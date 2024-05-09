<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visitors = Visitor::latest()->paginate(5);
        return view('backend.visitors.index',compact('visitors'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.visitors.create');
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

            'specialty.required' => 'حقل الاختصاص  مطلوب',


        ];

        $request->validate([
            'user_id' => 'required',
            'phone'=> 'required|numeric',
            'work'=>  'required',
            'hobby'=> 'required',
            'nationality'=> 'required',
            'current_location' => 'required',
            'gender'=>  'required',
            'is_phobia_dark'=> 'required',
            'is_phobia_animals'=> 'required',
            'is_phobia_fly' => 'required',
            'is_phobia_see'=>  'required',
            'is_phobia_open_space'=> 'required',
            'is_phobia_hights'=> 'required',
            'birthday'=> 'required',
            'num_companion'=> 'required',

        ], $messages);

        Visitor::create($request->all());
        return redirect()->route('visitors.index')
                        ->with('success','visitor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Visitor $visitor)
    {
        return view('backend.visitors.show',compact('visitor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visitor $visitor)
    {
        return view('backend.visitors.edit',compact('visitor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visitor $visitor)
    {
        $messages = [
            'name.required' => 'حقل  الاسم مطلوب',
            'phone.required' => 'حقل رقم الهاتف مطلوب',
            'phone.numeric' => 'هاتف المستخدم غير صالح',
            'is_free.required' => 'حقل نوع الحالة مطلوب',

            'specialty.required' => 'حقل الاختصاص  مطلوب',


        ];

        $request->validate([
            'user_id' => 'required',
            'phone'=> 'required|numeric',
            'work'=>  'required',
            'hobby'=> 'required',
            'nationality'=> 'required',
            'current_location' => 'required',
            'gender'=>  'required',
            'is_phobia_dark'=> 'required',
            'is_phobia_animals'=> 'required',
            'is_phobia_fly' => 'required',
            'is_phobia_see'=>  'required',
            'is_phobia_open_space'=> 'required',
            'is_phobia_hights'=> 'required',
            'birthday'=> 'required',
            'num_companion'=> 'required',

        ], $messages);

        $visitor->update($request->all());
        return redirect()->route('visitors.index')
                        ->with('success','visitor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visitor $visitor)
    {
        $visitor->delete();
        return redirect()->route('visitors.index')
                        ->with('success','visitor deleted successfully');
    }
}
