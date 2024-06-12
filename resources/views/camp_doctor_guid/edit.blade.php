<!-- resources/views/reservations/edit.blade.php -->

@extends('admin.layouts.layout')

@section('title')
   التعديل
@endsection

@section('header')
{{ Html::style('hdesign/hstyle.css') }}
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection
@section('content')
    <div class="container helementedit">
        <div class="card ">
            <div class="card-header">تعديل </div>

            <div class="card-body">
                <form method="POST" action="{{ route('camp_doctor_guid.update', $campDoctorGuid->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="camp_ground_id">المكان</label>
                        <select name="camp_ground_id" id="camp_ground_id" class="form-control">
                            @foreach($campGrounds as $campGround)
                            <option value="{{ $campGround->id }}" {{ $campGround->id == $campDoctorGuid->camp_ground_id ? 'selected' : '' }}>
                                {{ $campGround->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="doctor_id">الطبيب</label>
                        <select name="doctor_id" id="doctor_id" class="form-control">
                            @foreach($doctors as $doctor)
                            <option value="{{ $doctor->id }}" {{ $doctor->id == $campDoctorGuid->doctor_id ? 'selected' : '' }}>
                                {{ $doctor->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="guide_id">الدليل</label>
                        <select name="guide_id" id="guide_id" class="form-control">
                            @foreach($guides as $guide)
                            <option value="{{ $guide->id }}" {{ $guide->id == $campDoctorGuid->guide_id ? 'selected' : '' }}>
                                {{ $guide->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">الاسم</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $campDoctorGuid->name }}">
                    </div>
                    <div class="form-group">
                        <label for="display_name">الاسم المعروض</label>
                        <input type="text" name="display_name" id="display_name" class="form-control" value="{{ $campDoctorGuid->display_name }}">
                    </div>
                    <button type="submit" class="btn btn-primary">تحديث</button>
                </form>
            </div>
        </div>
    </div>
@endsection




















