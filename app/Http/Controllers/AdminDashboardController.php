<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Guide;
use App\Models\CampGround;
use App\Models\Reservation;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // جلب عدد الزائرين
        $visitorCount = User::where('role', 'visitor')->count();

        // جلب عدد الموظفين
        $employeeCount = User::where('role', 'employee')->count();

        // جلب عدد المدراء
        $adminCount = User::where('role', 'admin')->count();

         // جلب عدد الأطباء
         $doctorCount = Doctor::count();

         // جلب عدد الأدلة
         $guideCount = Guide::count();

         // جلب عدد أماكن التخييم
         $campGroundCount = CampGround::count();

         $activeReservationsCount = Reservation::where('start_date', '<=', now())
         ->where('end_date', '>=', now())
         ->count();

        // تمرير البيانات إلى العرض
        return view('layouts.app', compact('visitorCount', 'employeeCount', 'adminCount', 'doctorCount', 'guideCount', 'campGroundCount', 'activeReservationsCount'));
    }
}
