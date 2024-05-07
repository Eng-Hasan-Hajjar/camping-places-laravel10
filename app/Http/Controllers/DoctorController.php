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

        return view('doctor.departements.index',compact('doctors'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.departements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',

        ]);

        Doctor::create($request->all());

        return redirect()->route('departements.index')
                        ->with('success','Departement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $departement)
    {
        return view('doctor.departements.show',compact('departement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $departement)
    {
        return view('doctor.departements.edit',compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $departement)
    {
        $request->validate([
            'name' => 'required',

        ]);

        $departement->update($request->all());

        return redirect()->route('departements.index')
                        ->with('success','Departement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $departement)
    {
        $departement->delete();

        return redirect()->route('departements.index')
                        ->with('success','Departement deleted successfully');
    }
}
