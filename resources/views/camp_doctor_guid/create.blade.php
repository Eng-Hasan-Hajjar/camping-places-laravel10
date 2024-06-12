<!-- resources/views/reservations/create.blade.php -->

@extends('admin.layouts.layout')

@section('title')
التحكم
@endsection

@section('header')
{{ Html::style('hdesign/hstyle.css') }}
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection

@section('content')
    <div class="container helement">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header ">إنشاء جديد</div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    </div>
                    @endif
                    <div class="card-body ">



                        <form method="POST" action="{{ route('camp_doctor_guid.store') }}">
                            @csrf

                                <div class="form-group  ">
                                    <label for="camp_ground_id">المكان</label>
                                    <select name="camp_ground_id" id="camp_ground_id" class="form-control">
                                        @foreach($campGrounds as $campGround)
                                        <option value="{{ $campGround->id }}">{{ $campGround->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="doctor_id">الطبيب</label>
                                    <select name="doctor_id" id="doctor_id" class="form-control">
                                        @foreach($doctors as $doctor)
                                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="guide_id">الدليل</label>
                                    <select name="guide_id" id="guide_id" class="form-control">
                                        @foreach($guides as $guide)
                                        <option value="{{ $guide->id }}">{{ $guide->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">الاسم</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="display_name">الاسم المعروض</label>
                                    <input type="text" name="display_name" id="display_name" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">إضافة</button>
  <!-- زر الرجوع -->
  <a href="{{ url('/adminpanel/camp_doctor_guid') }}" class="btn btn-secondary" >  المجموعات </a>


                            </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

@endsection











































