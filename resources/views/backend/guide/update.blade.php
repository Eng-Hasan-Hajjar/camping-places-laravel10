<!-- resources/views/reservations/update.blade.php -->

@extends('admin.layouts.layout')

@section('title')
    
@endsection

@section('header')
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">تحديث بيانات الحجز</div>

            <div class="card-body">
                <form method="POST" action="{{ route('doctors.update', $doctor) }}">
                    @csrf
                    @method('PUT')


                    <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                </form>
            </div>
        </div>
    </div>
@endsection
