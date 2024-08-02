<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\User;
// This will work and generate everything properly.
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
class VisitorController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = auth()->user();
        $visitors = Visitor::latest()->paginate(5);
        $users = User::latest()->paginate(5);
        return view('backend.visitors.index',compact('visitors','users'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
          // تحقق مما إذا كان مديرًا وإذا لم يكن لديه معرف المستخدم (user_id)
        if (auth()->user()->role === 'admin' && !$request->has('user_id')) {
            return redirect()->route('register')
                            ->with('info', 'يرجى إنشاء حساب مستخدم جديد أولاً.');
        }
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
            'work.required' => 'حقل العمل مطلوب',
            'hobby.required' => 'حقل الهواية مطلوب',
            'nationality.required' => 'حقل الجنسية مطلوب',
            'current_location.required' => 'حقل الموقع الحالي مطلوب',
            'gender.required' => 'حقل الجنس مطلوب',
            'num_companion.required' => 'حقل عدد المرافقين مطلوب',
            'is_phobia_hights.required' => 'حقل فوبيا المرتفعات مطلوب',
            'is_phobia_dark.required' => 'حقل فوبيا الظلام مطلوب',
            'is_phobia_animals.required' => 'حقل فوبيا الحيوانات مطلوب',
            'is_phobia_fly.required' => 'حقل فوبيا الطيران مطلوب',
            'is_phobia_see.required' => 'حقل فوبيا الرؤية مطلوب',
            'is_phobia_open_space.required' => 'حقل فوبيا الأماكن المفتوحة مطلوب',
            'birthday.required' => 'حقل تاريخ الميلاد مطلوب',
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

        // التحقق من وجود المستخدم
        if ($user) {
            // التحقق إذا كان المستخدم زائر ولديه بالفعل معلومات زائر
            if ($user->role === 'visitor' && $user->visitor) {
                return redirect()->route('dashboard')->with('error', 'لا يمكن للزائر إضافة معلومات زائر جديد.');
            }

            // إنشاء معلومات الزائر
            $visitor = new Visitor($request->all());
            $user->visitor()->save($visitor);

            // إعادة التوجيه بناءً على دور المستخدم
            if ($user->role === 'visitor') {
                return redirect()->route('dashboard')->with('success', 'تم إضافة معلوماتك بنجاح.');
            } else {
                return redirect()->route('visitors.index')->with('success', 'تم إضافة الزائر بنجاح.');
            }
        }


/*
          // الحصول على المستخدم المسجل
        $user = auth()->user();
        $visitor = new Visitor($request->all());
        $user->visitor()->save($visitor);
          // التحقق من وجود المستخدم
        if ($user) {

            $visitor = $user->visitor;

            return view('backend.visitors.showyou', compact('visitor','user'));
        }
            */
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

    public function showVisitorByUserId($userId)
    {
       // dd($userId);
        //     Visitor مرتبط بنموذج User
        $visitor = Visitor::where('user_id', $userId)->first();
       // dd($visitor);
          // إذا لم يتم العثور على معلومات الزائر
    if (!$visitor) {
        // يمكنك إعادة توجيه المستخدم إلى صفحة أخرى لاستكمال البيانات أو عرض رسالة خطأ
        // هنا نعيد توجيه المستخدم إلى صفحة استكمال البيانات
        return redirect()->route('visitors.input')->with('error', 'لم يتم العثور على معلومات الزائر، يرجى استكمال البيانات.');
    }
        return view('backend.visitors.showyou', compact('visitor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visitor $visitor)
    {
        return view('backend.visitors.edit',compact('visitor'));
    }
    public function edityou(Visitor $visitor)
    {
        return view('backend.visitors.edityou',compact('visitor'));
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
            'phone.required' => 'حقل رقم الهاتف مطلوب',
            'phone.numeric' => 'هاتف المستخدم غير صالح',
            'work.required' => 'حقل العمل مطلوب',
            'hobby.required' => 'حقل الهواية مطلوب',
            'nationality.required' => 'حقل الجنسية مطلوب',
            'current_location.required' => 'حقل الموقع الحالي مطلوب',
            'gender.required' => 'حقل الجنس مطلوب',
            'num_companion.required' => 'حقل عدد المرافقين مطلوب',
            'is_phobia_dark.required' => 'حقل فوبيا الظلام مطلوب',
            'is_phobia_animals.required' => 'حقل فوبيا الحيوانات مطلوب',
            'is_phobia_fly.required' => 'حقل فوبيا الطيران مطلوب',
            'is_phobia_see.required' => 'حقل فوبيا الرؤية مطلوب',
            'is_phobia_open_space.required' => 'حقل فوبيا الأماكن المفتوحة مطلوب',
            'is_phobia_hights.required' => 'حقل فوبيا المرتفعات مطلوب',
            'birthday.required' => 'حقل تاريخ الميلاد مطلوب',


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

        if (Auth::user()->role === 'visitor') {
            return redirect()->route('dashboard')
                             ->with('success', 'تم تحديث معلوماتك  بنجاح');
        }


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

    public function input()
    {
        // يمكنك إضافة كود لإعداد واجهة إدخال بيانات المريض هنا
        return view('backend.visitors.input');
    }


      /*
    public function input(Request $request)
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

 */

}
