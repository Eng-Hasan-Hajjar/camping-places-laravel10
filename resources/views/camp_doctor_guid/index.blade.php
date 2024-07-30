@extends('admin.layouts.layout')

@section('title')
    التحكم
@endsection

@section('header')
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection
@section('content')
<div class="container"style="direction: rtl;padding:10px">
    <a  style="direction: rtl;padding:10px;margin:10px" href="{{ route('camp_doctor_guid.create') }}" class="btn btn-primary float-right">إضافة مجموعة جديدة</a>
    <table class="table"style="position:center;text-align:center">
        <thead>
            <tr>
                <th>الاسم</th>
                <th>الاسم المعروض</th>
                <th>المكان</th>
                <th>الطبيب</th>
                <th>الدليل</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($campDoctorGuids as $campDoctorGuid)
            <tr>
                <td>{{ $campDoctorGuid->name }}</td>
                <td>{{ $campDoctorGuid->display_name }}</td>
                <td>{{ $campDoctorGuid->campGround->name }}</td>
                <td>{{ $campDoctorGuid->doctor->name }}</td>
                <td>{{ $campDoctorGuid->guide->name }}</td>
                <td style="text-align:center;margin:5px">
                    <a href="{{ route('camp_doctor_guid.edit', $campDoctorGuid->id) }}" class="btn btn-warning">تعديل</a>
                    <form action="{{ route('camp_doctor_guid.destroy', $campDoctorGuid) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذه المجموعة ؟ ')">حذف</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
