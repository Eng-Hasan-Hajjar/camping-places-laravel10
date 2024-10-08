<!-- resources/views/reservations/all.blade.php -->

@extends(Auth::user()->can('isEmployee') || Auth::user()->can('isAdmin') ? 'admin.layouts.layout' : 'admin.layouts.layoutvisitor')

@section('title')
    التحكم بالحجوزات
@endsection

@section('header')
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection
@section('content')




    <div class="container hcontainer">
        <div class="card hcard helement hcard-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

            <div class="card-header  "><p  class="float-right">جميع الحجوزات</p></div>
            <div class="card-header">
                @if(Auth::user()->can('isVisitor') )
                    <a href="{{ route('dashboard') }}" class=" btn btn-success float-left">لوحة التحكم  </a>
                @endif
                <a href="{{ route('reservations.create') }}" class=" btn btn-success float-right">إنشاء حجز جديد</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th> المستخدم</th>
                            <th> الحزمة</th>
                            <th>تاريخ البداية</th>
                            <th>تاريخ الانتهاء</th>
                            <th>التحكم</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr>
                                <td>{{ $reservation->user->name }}</td>

                                <td>{{ optional($reservation->campDoctorGuid)->display_name }}</td>
                             {{--   <td>{{ $reservation->camp_ground_id }} {{ $campground->name }}</td> --}}
                                <td>{{ $reservation->start_date }}</td>
                                <td>{{ $reservation->end_date }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('reservations.show', $reservation) }}" class="btn btn-info">عرض التفاصيل</a>
                                        <a href="{{ route('reservations.edit', $reservation) }}" class="btn btn-primary">تعديل</a>
                                        <form action="{{ route('reservations.destroy', $reservation) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الحجز؟')">حذف</button>

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
