<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CampDoctorGuid;
use App\Models\CampGround;
use App\Models\Doctor;
use App\Models\Guide;

class CampDoctorGuidController extends Controller
{
    public function index()
    {
        $campDoctorGuids = CampDoctorGuid::all();
        return view('camp_doctor_guid.index', compact('campDoctorGuids'));
    }

    public function create()
    {
        $campGrounds = CampGround::all();
        $doctors = Doctor::all();
        $guides = Guide::all();
        return view('camp_doctor_guid.create', compact('campGrounds', 'doctors', 'guides'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'camp_ground_id' => 'required|exists:camp_grounds,id',
            'doctor_id' => 'required|exists:doctors,id',
            'guide_id' => 'required|exists:guides,id',
            'name' => 'required|string|max:255',
            'display_name' => 'required|string|max:255',
        ]);

        CampDoctorGuid::create($request->all());

        return redirect()->route('camp_doctor_guid.index')->with('success', 'تم إضافة المجموعة بنجاح.');
    }

    public function edit(CampDoctorGuid $campDoctorGuid)
    {
        $campGrounds = CampGround::all();
        $doctors = Doctor::all();
        $guides = Guide::all();
        return view('camp_doctor_guid.edit', compact('campDoctorGuid', 'campGrounds', 'doctors', 'guides'));
    }

    public function update(Request $request, CampDoctorGuid $campDoctorGuid)
    {
        $request->validate([
            'camp_ground_id' => 'required|exists:camp_grounds,id',
            'doctor_id' => 'required|exists:doctors,id',
            'guide_id' => 'required|exists:guides,id',
            'name' => 'required|string|max:255',
            'display_name' => 'required|string|max:255',
        ]);

        $campDoctorGuid->update($request->all());

        return redirect()->route('camp_doctor_guid.index')->with('success', 'تم تحديث المجموعة بنجاح.');
    }

    public function destroy(CampDoctorGuid $campDoctorGuid)
    {
        $campDoctorGuid->delete();
        return redirect()->route('camp_doctor_guid.index')->with('success', 'تم حذف المجموعة بنجاح.');
    }
}
