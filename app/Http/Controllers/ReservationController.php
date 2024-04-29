<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{


   // الوظيفة لعرض جميع الحجوزات
   public function index()
   {
       $reservations = Reservation::all();
       return view('reservations.all', compact('reservations'));

   }

     // عرض النموذج لإنشاء حجز جديد
     public function create()
     {
         return view('reservations.create');
     }

     // حفظ الحجز الجديد في قاعدة البيانات
     public function store(Request $request)
     {
        dd($request);
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'camp_ground_id' => 'required|exists:camp_grounds,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);


         Reservation::create([
             'user_id' => $request->user_id,
             'camp_ground_id' => $request->camp_ground_id,
             'start_date' => $request->start_date,
             'end_date' => $request->end_date,
         ]);

         return redirect()->route('reservations.index')->with('success', 'تم إنشاء الحجز بنجاح.');
     }

     // عرض التفاصيل لحجز معين
     public function show(Reservation $reservation)
     {
         return view('reservations.show', compact('reservation'));
     }


     // عرض النموذج لتعديل حجز معين
     public function edit(Reservation $reservation)
     {
         return view('reservations.edit', compact('reservation'));
     }

     // تحديث بيانات الحجز في قاعدة البيانات
     public function update(Request $request, Reservation $reservation)
     {

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'camp_ground_id' => 'required|exists:camp_grounds,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

         $reservation->update([
             'user_id' => $request->user_id,
             'camp_ground_id' => $request->camp_ground_id,
             'start_date' => $request->start_date,
             'end_date' => $request->end_date,
         ]);

         return redirect()->route('reservations.index')->with('success', 'تم تحديث الحجز بنجاح.');
     }

     // حذف حجز معين من قاعدة البيانات
     public function destroy(Reservation $reservation)
     {
         $reservation->delete();
         return redirect()->route('reservations.index')->with('success', 'تم حذف الحجز بنجاح.');
     }

}
