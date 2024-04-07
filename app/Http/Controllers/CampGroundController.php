<?php

namespace App\Http\Controllers;
use App\Models\CampGround;
use Illuminate\Http\Request;
use app\Models\User;

class CampGroundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campGrounds = CampGround::latest()->paginate(5);

        return view('backend.campGrounds.index',compact('campGrounds'))
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
        $user=User::user();
          $request->validate([
            'name'=>'required|min:1|max:100',
             'description'=>'required',
             'country'=>'required',
             'city'=>'required',
             'region'=>'required',
             'cm_type'=>'required|integer',
             'cm_season'=>'required|integer',
             'campGround_image'=>'required|image|max:2048',
        ]);

        $image = $request->file('es_image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
              'es_name'=>$request->es_name,
              'es_price'=>$request->es_price,
              'es_rent'=>$request->es_rent,
              'es_sequar'=>$request->es_sequar,
              'es_type'=>$request->es_type,
              'es_small_dis'=>$request->es_small_dis,
              'es_meta'=>$request->es_meta,
              'es_langtuide'=>$request->es_langtuide,
              'es_latitude'=>$request->es_latitude,
              'es_larg_dis'=>$request->es_larg_dis,
              'es_status'=>$request->es_status,
              'user_id'=>$user->id,
              'es_rooms'=>$request->es_rooms,
              'es_place'=>  $request->es_place,
              'es_image'     =>  $new_name
        );

        CampGround::create($form_data);

        return redirect('/adminpanel/campgrounds')->with('success', 'Data Added successfully.');


        $request->validate([
            'name' => 'required',

        ]);

        CampGround::create($request->all());

        return redirect()->route('backend.campGrounds.index')
                        ->with('success','backend.campGrounds. created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('backend.campGrounds.show',compact('departement'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.campGrounds.edit',compact('departement'));
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
