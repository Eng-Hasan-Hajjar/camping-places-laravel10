<!-- resources/views/reservations/create.blade.php -->

@extends('admin.layouts.layout')

@section('title')
    control of camping places
@endsection

@section('header')
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">إنشاء حجز جديد</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('reservations.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="user_id">رقم المستخدم</label>
                                <input type="text" name="user_id" class="form-control" id="user_id" value="{{ old('user_id') }}">
                            </div>

                            <div class="form-group">
                                <label for="camp_ground_id">رقم المكان</label>
                                <input type="text" name="camp_ground_id" class="form-control" id="camp_ground_id" value="{{ old('camp_ground_id') }}">
                            </div>

                            <div class="form-group">
                                <label for="start_date">تاريخ البداية</label>
                                <input type="date" name="start_date" class="form-control" id="start_date" value="{{ old('start_date') }}">
                            </div>

                            <div class="form-group">
                                <label for="end_date">تاريخ الانتهاء</label>
                                <input type="date" name="end_date" class="form-control" id="end_date" value="{{ old('end_date') }}">
                            </div>

                            <button type="submit" class="btn btn-primary">حفظ الحجز</button>
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




