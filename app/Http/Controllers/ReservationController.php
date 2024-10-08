<?php

namespace App\Http\Controllers;

use App\Models\CampDoctorGuid;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
//use Illuminate\Http\DB;
use Illuminate\Support\Facades\DB;
use App\Models\Reservation;
use App\Models\CampGround;
// This will work and generate everything properly.
use App\Models\Post;

class ReservationController extends Controller
{
   // الوظيفة لعرض جميع الحجوزات
   public function index()
   {   //$campgrounds = CampGround::all();
       $reservations = Reservation::all();
       $campDoctorGuids = CampDoctorGuid::all();
      // return view('reservations.all', compact('reservations', 'campgrounds'));
      return view('reservations.all', compact('reservations','campDoctorGuids'));
   }

    // عرض النموذج لإنشاء حجز جديد
    public function create()
    {
     //    $campgrounds = CampGround::all();
         $campDoctorGuid = CampDoctorGuid::all();
     //   return view('reservations.create',compact('campgrounds','campDoctorGuid'));
     return view('reservations.create',compact('campDoctorGuid'));
    }
     // حفظ الحجز الجديد في قاعدة البيانات
    public function store(Request $request)
    {
        $messages = [
            'camp_doctor_guid_id.required' => 'حقل رقم مجموعة المكان والطبيب والدليل مطلوب',
            'camp_doctor_guid_id.exists' => 'رقم مجموعة المكان والطبيب والدليل غير صالح',

            'user_id.required' => 'حقل رقم المستخدم مطلوب',
            'user_id.exists' => 'رقم المستخدم غير صالح',
        //  'camp_ground_id.required' => 'حقل رقم المكان مطلوب',
        //  'camp_ground_id.exists' => 'رقم المكان غير صالح',
            'start_date.required' => 'حقل تاريخ البداية مطلوب',
            'start_date.date' => 'تاريخ البداية غير صالح',
         //   'start_date.after_or_equal' => 'يجب أن يكون تاريخ البداية بعد تاريخ الإن',

            'end_date.required' => 'حقل تاريخ الانتهاء مطلوب',
            'end_date.date' => 'تاريخ الانتهاء غير صالح',
            'end_date.after_or_equal' => 'يجب أن يكون تاريخ الانتهاء بعد تاريخ البداية',
        ];
        // dd($request->all());
        $request->validate([
            'camp_doctor_guid_id' => 'required|exists:camp_doctor_guids,id',
            //'camp_ground_id' => 'required|exists:camp_grounds,id',
            'start_date' => 'required|date|after_or_equal:now',
            'end_date' => 'required|date|after_or_equal:start_date',

        ], $messages);
                    // تحقق من أن المجموعة غير محجوزة بالفعل في التواريخ المحددة
                    $existingReservation = Reservation::where('camp_doctor_guid_id', $request->camp_doctor_guid_id)
                    ->where(function ($query) use ($request) {
                        $query->whereBetween('start_date', [$request->start_date, $request->end_date])
                            ->orWhereBetween('end_date', [$request->start_date, $request->end_date])
                            ->orWhere(function ($query) use ($request) {
                                $query->where('start_date', '<=', $request->start_date)
                                    ->where('end_date', '>=', $request->end_date);
                            });
                    })
                    ->exists();

                    if ($existingReservation) {
                    return redirect()->back()->with('error', 'المجموعة محجوزة بالفعل في هذه الفترة.');
                    }


        // إنشاء الحجز فقط في حالة صحة البيانات
        Reservation::create([
            'camp_doctor_guid_id' => $request->camp_doctor_guid_id,
            'user_id' => Auth::id(), // استخدام معرف المستخدم الحالي
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        $user = auth()->user();
        if ($user) {
        // تحقق من دور المستخدم
            if ($user->role === 'admin') {
                // إذا كان المستخدم مديرًا، قم بإعادة توجيهه إلى لوحة التحكم
                return redirect('/adminpanel/reservations')->with('success', 'تم إضافة الحجز بنجاح.');
            } else {
                // إذا كان المستخدم زائرًا، قم بعرض رسالة وابقائه في نفس الصفحة
                return back()->with('success', 'تم تسجيل الحجز بنجاح. سنقوم بمراجعة طلبك.');
            }
        }
       // return redirect('/adminpanel/reservations')->with('success', 'Data Added successfully.');

    }

     // عرض التفاصيل لحجز معين
     public function show(Reservation $reservation)
     {
         return view('reservations.show', compact('reservation'));
     }


     // عرض النموذج لتعديل حجز معين
     public function edit(Reservation $reservation)
     {
      //  $campgrounds = CampGround::all();
      $campDoctorGuid = CampDoctorGuid::all();
         return view('reservations.edit', compact('reservation','campDoctorGuid'));
     }

     // تحديث بيانات الحجز في قاعدة البيانات
     public function update(Request $request, Reservation $reservation)
     {
        $messages = [
            'camp_doctor_guid_id.required' => 'حقل رقم مجموعة المكان والطبيب والدليل مطلوب',
            'camp_doctor_guid_id.exists' => 'رقم مجموعة المكان والطبيب والدليل غير صالح',

            'user_id.required' => 'حقل رقم المستخدم مطلوب',
            'user_id.exists' => 'رقم المستخدم غير صالح',
        //  'camp_ground_id.required' => 'حقل رقم المكان مطلوب',
        //  'camp_ground_id.exists' => 'رقم المكان غير صالح',
            'start_date.required' => 'حقل تاريخ البداية مطلوب',
            'start_date.date' => 'تاريخ البداية غير صالح',
         //   'start_date.after_or_equal' => 'يجب أن يكون تاريخ البداية بعد تاريخ الإن',

            'end_date.required' => 'حقل تاريخ الانتهاء مطلوب',
            'end_date.date' => 'تاريخ الانتهاء غير صالح',
            'end_date.after_or_equal' => 'يجب أن يكون تاريخ الانتهاء بعد تاريخ البداية',
        ];
        // dd($request->all());
        $request->validate([
            'camp_doctor_guid_id' => 'required|exists:camp_doctor_guids,id',
            //'camp_ground_id' => 'required|exists:camp_grounds,id',
            'start_date' => 'required|date|after_or_equal:now',
            'end_date' => 'required|date|after_or_equal:start_date',

        ], $messages);
                    // تحقق من أن المجموعة غير محجوزة بالفعل في التواريخ المحددة
                    $existingReservation = Reservation::where('camp_doctor_guid_id', $request->camp_doctor_guid_id)
                    ->where(function ($query) use ($request) {
                        $query->whereBetween('start_date', [$request->start_date, $request->end_date])
                            ->orWhereBetween('end_date', [$request->start_date, $request->end_date])
                            ->orWhere(function ($query) use ($request) {
                                $query->where('start_date', '<=', $request->start_date)
                                    ->where('end_date', '>=', $request->end_date);
                            });
                    })
                    ->exists();

                    if ($existingReservation) {
                    return redirect()->back()->with('error', 'المجموعة محجوزة بالفعل في هذه الفترة.');
                    }



         $reservation->update([
            'camp_doctor_guid_id' => $request->camp_doctor_guid_id,
           'user_id' => Auth::id(), // استخدام معرف المستخدم الحالي
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
         //    'user_id' => $request->user_id,

         ]);
         $user = auth()->user();
         if ($user) {
         // تحقق من دور المستخدم
             if ($user->role === 'admin') {
                 // إذا كان المستخدم مديرًا، قم بإعادة توجيهه إلى لوحة التحكم
                 return redirect('/adminpanel/reservations')->with('success', 'تم إضافة الحجز بنجاح.');
             } else {
                 // إذا كان المستخدم زائرًا، قم بعرض رسالة وابقائه في نفس الصفحة
                 return back()->with('success', 'تم تسجيل الحجز بنجاح. سنقوم بمراجعة طلبك.');
             }
         }
         return redirect()->route('reservations.index')->with('success', 'تم تحديث الحجز بنجاح.');
     }

     // حذف حجز معين من قاعدة البيانات
     public function destroy(Reservation $reservation)
     {
         $reservation->delete();
         return redirect()->route('reservations.index')->with('success', 'تم حذف الحجز بنجاح.');
     }

}
