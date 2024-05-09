<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::latest()->paginate(5);
        return view('backend.doctors.all',compact('doctors'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.doctors.create');
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

            'required.required' => 'حقل الاختصاص  مطلوب',


        ];

        $request->validate([
            'name' => 'required',
            'phone'=>  'required|numeric',
            'specialty'=> 'required',
            'is_free'=> 'required',
        ], $messages);

        Doctor::create($request->all());
        return redirect()->route('doctors.index')
                        ->with('success','doctor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        return view('backend.doctors.show',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        return view('backend.doctors.edit',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
         $messages = [

        'phone.required' => 'حقل رقم الهاتف مطلوب',
        'phone.numeric' => 'رقم المستخدم غير صالح',
        'is_free.required' => 'حقل نوع الحالة مطلوب',
        'name.required' => 'حقل رقم الاسم مطلوب',
        'required.required' => 'حقل الاختصاص  مطلوب',

    ];
        $request->validate([
            'name' => 'required',
            'phone'=>  'required|numeric',
            'specialty'=> 'required',
            'is_free'=> 'required',

        ], $messages);
        $doctor->update($request->all());
        return redirect()->route('doctors.index')
                        ->with('success','doctor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctors.index')
                        ->with('success','doctor deleted successfully');
    }
}
