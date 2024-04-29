<!-- resources/views/reservations/all.blade.php -->

@extends('admin.layouts.layout')

@section('title')
    control of reservation
@endsection

@section('header')
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">جميع الحجوزات</div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>رقم المستخدم</th>
                            <th>رقم المكان</th>
                            <th>تاريخ البداية</th>
                            <th>تاريخ الانتهاء</th>
                            <th>التحكم</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr>
                                <td>{{ $reservation->user_id }}</td>
                                <td>{{ $reservation->camp_ground_id }}</td>
                                <td>{{ $reservation->start_date }}</td>
                                <td>{{ $reservation->end_date }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('reservations.show', $reservation) }}" class="btn btn-info">عرض التفاصيل</a>
                                        <a href="{{ route('reservations.edit', $reservation) }}" class="btn btn-primary">تعديل</a>
                                        <form action="{{ route('reservations.destroy', $reservation) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">حذف</button>
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
