<!-- resources/views/reservations/all.blade.php -->

@extends('admin.layouts.layout')

@section('title')
    التحكم بالأطباء
@endsection

@section('header')
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection
@section('content')
    <div class="container hcontainer">
        <div class="card hcard helement hcard-body">
            <div class="card-header  "><p  class="float-right">جميع الأطباء</p></div>
            <div class="card-header">
                <a href="{{ route('doctors.create') }}" class=" btn btn-success float-right">إنشاء جديد</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th> الاسم</th>
                            <th> الهاتف</th>
                            <th>الاختصاص </th>
                            <th> التفرغ</th>
                            <th>التحكم</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->phone }}</td>
                                <td>{{ $doctor->specialty }}</td>
                                <td>{{ $doctor->is_free }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('doctors.show', $doctor) }}" class="btn btn-info">عرض التفاصيل</a>
                                        <a href="{{ route('doctors.edit', $doctor) }}" class="btn btn-primary">تعديل</a>
                                        <form action="{{ route('doctors.destroy', $doctor) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الطبيب؟ ')">حذف</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
