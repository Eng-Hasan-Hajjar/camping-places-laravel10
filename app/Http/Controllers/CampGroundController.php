<?php

namespace App\Http\Controllers;

use App\Models\CampDoctorGuid;
use App\Models\CampGround;
use App\Models\Image;
use Illuminate\Http\Request;
use app\Models\User;
// This will work and generate everything properly.
use App\Models\Post;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;

class CampGroundController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campGrounds = CampGround::all();
        return view('backend.campGrounds.index', compact('campGrounds'));
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
        //$user=User::user();
        $request->validate([
            'name' => 'required|min:1|max:100',
            'description' => 'required',
            'country' => 'required',
            'city' => 'required',
            'region' => 'required',
            'cm_type' => 'required|integer',
            'cm_season' => 'required|integer',
            'campGround_image' => 'required|image',
            'google_image' => 'required|image',
            'forecast' => 'required',
        ]);

        $image = $request->file('campGround_image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        $imagegoogle = $request->file('google_image');
        $new_name_google = rand() . '.' . $imagegoogle->getClientOriginalExtension();
        $imagegoogle->move(public_path('imagesgoogle'), $new_name_google);

        $form_data = array(
            'name' => $request->name,
            'description' => $request->description,
            'country' => $request->country,
            'city' => $request->city,
            'region' => $request->region,
            'cm_type' => $request->cm_type,
            'cm_season' => $request->cm_season,

            'campGround_image'  =>  $new_name,

            'google_image'  =>  $new_name_google,
            'forecast' => $request->forecast,

        );

        CampGround::create($form_data);

        return redirect('/adminpanel/campground')->with('success', 'Data Added successfully.');


        $request->validate([
            'name' => 'required',

        ]);

        CampGround::create($request->all());

        return redirect()->route('backend.campGrounds.index')
            ->with('success', 'backend.campGrounds. created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = CampGround::find($id);
        return view('backend.campGrounds.show', compact('data'));
    }
    public function show333(CampGround $data)
    {
        return view('backend.campGrounds.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = CampGround::find($id);
        return view('backend.campGrounds.edit', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CampGround $campground)
    {
        $request->validate([
            'name' => 'required',

        ]);
        $image = $request->file('campGround_image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        $imagegoogle = $request->file('google_image');
        $new_name_google = rand() . '.' . $imagegoogle->getClientOriginalExtension();
        $imagegoogle->move(public_path('imagesgoogle'), $new_name_google);

        $form_data = array(
            'name' => $request->name,
            'description' => $request->description,
            'country' => $request->country,
            'city' => $request->city,
            'region' => $request->region,
            'cm_type' => $request->cm_type,
            'cm_season' => $request->cm_season,

            'campGround_image'  =>  $new_name,

            'google_image'  =>  $new_name_google,
            'forecast' => $request->forecast,

        );


        $campground->update($form_data);

        return redirect()->route('campground.index')
            ->with('success', 'campground updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CampGround $campground)
    {
        $campground->delete();

        return redirect()->route('campground.index')
            ->with('success', 'campground deleted successfully');
    }

    public function showRatings($id)
    {
        $campground = Campground::with('ratings.user')->findOrFail($id);
        return view('campground.ratings', compact('campground'));
    }

    public function showCampgrounds()
    {

        $campDoctorGuids = CampDoctorGuid::all();

        $campgrounds = Campground::all();
        return view('frontend.index', compact('campgrounds','campDoctorGuids'));
    }

    public function showAllCamp(Request $request)
    {
    // الحصول على المستخدم المسجل حالياً
      $user = auth()->user();

    // التحقق من وجود المستخدم والزائر
    if ($user && $user->visitor) {
        // الحصول على معلومات الزائر
        $visitor = $user->visitor;

        // البدء باستعلام الأماكن
        $campgrounds = CampGround::query();

        // تصفية الأماكن بناءً على فوبيا الزائر
        $campgrounds = $campgrounds->withoutMountain($visitor->is_phobia_hights)
                                ->withoutForest($visitor->is_phobia_dark)
                                ->withoutDesert($visitor->is_phobia_open_space);

        $campgrounds = $campgrounds->get();

            // عرض النتائج
            return view('frontend.campground.all', compact('campgrounds'));
        }

        // في حال عدم وجود المستخدم أو الزائر، إعادة توجيه أو عرض رسالة مناسبة
        return redirect()->route('home')->with('error', 'لم يتم العثور على معلومات الزائر.');/*
        $campgrounds = Campground::all();
        return view('frontend.campground.all', compact('campgrounds'));
        */
    }
    public function showSingle($id){
        $campinfo=Campground::findOrFail($id);
        $images = Image::where('camp_ground_id' , $id)->get();
        return view('frontend.campground.campinfo',compact('campinfo','images'));
      }

      public function forest(){
        $campgrounds = Campground::where('cm_type', '0')->get();

        return view('frontend.campground.all', compact('campgrounds'));

      }
      public function desert(){
            $campgrounds = Campground::where('cm_type', '1')->get();

            return view('frontend.campground.all', compact('campgrounds'));

          }
          public function mountain(){
                $campgrounds = Campground::where('cm_type', '2')->get();

                return view('frontend.campground.all', compact('campgrounds'));

              }




}
