<!-- resources/views/reservations/all.blade.php -->

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
    <div class="container hcontainer">
        <div class="card hcard helement hcard-body">
            <div class="card-header  "><p  class="float-right">جميع الأدلة</p></div>
            <div class="card-header">
                <a href="{{ route('guides.create') }}" class=" btn btn-success float-right">إنشاء جديد</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th> الاسم</th>
                            <th> الهاتف</th>

                            <th> التفرغ</th>
                            <th>التحكم</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guides as $guide)
                            <tr>
                                <td>{{ $guide->name }}</td>
                                <td>{{ $guide->phone }}</td>

                                <td>{{ $guide->is_free }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('guides.show', $guide) }}" class="btn btn-info">عرض التفاصيل</a>
                                        <a href="{{ route('guides.edit', $guide) }}" class="btn btn-primary">تعديل</a>
                                        <form action="{{ route('guides.destroy', $guide) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الدليل السياحي ')">حذف</button>
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
