<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\User;
class VisitorController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
/*
        // الحصول على المستخدم المسجل حاليا
        $user = auth()->user();

        // التحقق من وجود المستخدم
        if ($user) {
            // الحصول على معلومات المريض للمستخدم الحالي
            $visitor = $user->visitor;

            // عرض معلومات المريض
            return view('backend.visitors.show', compact('visitor'));
        }
*/
        $user = auth()->user();
        $visitors = Visitor::latest()->paginate(5);
        $users = User::latest()->paginate(5);
        return view('backend.visitors.index',compact('visitors','users'))
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



        ];

        $request->validate([

            'phone'=> 'required|numeric',
            'work'=>  'required',
            'hobby'=> 'required',
            'nationality'=> 'required',
            'current_location' => 'required',
            'gender'=>  'required',
            'num_companion'=> 'required',
            'is_phobia_hights'=> 'required',
            'is_phobia_dark'=> 'required',
            'is_phobia_animals'=> 'required',
            'is_phobia_fly' => 'required',
            'is_phobia_see'=>  'required',
            'is_phobia_open_space'=> 'required',

            'birthday'=> 'required',


        ], $messages);

          // الحصول على المستخدم المسجل
        $user = auth()->user();
        $visitor = new Visitor($request->all());
        $user->visitor()->save($visitor);

         //  Visitor::create($request->all());
        return redirect()->route('visitors.index')
                        ->with('success','visitor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Visitor $visitor)
    {
        $user = auth()->user();
        $users = User::all();
        return view('backend.visitors.show',compact('visitor','users'));
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

            'phone'=> 'required|numeric',
            'work'=>  'required',
            'hobby'=> 'required',
            'nationality'=> 'required',
            'current_location' => 'required',
            'gender'=>  'required',
            'num_companion'=> 'required',
            'is_phobia_dark'=> 'required',
            'is_phobia_animals'=> 'required',
            'is_phobia_fly' => 'required',
            'is_phobia_see'=>  'required',
            'is_phobia_open_space'=> 'required',
            'is_phobia_hights'=> 'required',
            'birthday'=> 'required',


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
