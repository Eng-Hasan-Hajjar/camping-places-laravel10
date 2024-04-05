<?php

namespace App\Http\Controllers;
use App\Models\CampGround;
use Illuminate\Http\Request;

class CampGroundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campGrounts = CampGround::latest()->paginate(5);

        return view('backend.campGrounds.index',compact('campGrounts'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.campGrounds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',

        ]);

        Departement::create($request->all());

        return redirect()->route('departements.index')
                        ->with('success','Departement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('doctor.departements.show',compact('departement'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('doctor.departements.edit',compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
    public function destroy(string $id)
    {
        $departement->delete();

        return redirect()->route('departements.index')
                        ->with('success','Departement deleted successfully');
    }
}
