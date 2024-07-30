<!-- resources/views/reservations/show.blade.php -->

@extends('admin.layouts.layout')

@section('title')
    تفاصيل
@endsection

@section('header')
    {{ Html::style('hdesign/hstyle.css') }}
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection

@section('content')
    <div class="container hcontainer">
        <div class="card hcard">
            <div class="card-header"style="position:center;text-align:center">التفاصيل </div>

            <div class="card-body hcard-body">
                <!-- تفاصيل الحجز -->

                <p><strong> الاسم:</strong> {{ $doctor->name }}</p>
                <p><strong> الهاتف:</strong> {{ $doctor->phone}}</p>
                <p><strong> حالة الطبيب:</strong> @if($doctor->is_free == 1)  متفرغ  @else غير متفرغ  @endif</p>
                <p><strong> الاختصاص:</strong> {{ $doctor->specialty }}</p>

                <!-- أزرار التحكم -->
                <div class="btn-group">
                    <a href="{{ route('doctors.edit', $doctor) }}" class="btn btn-primary">تعديل</a>

                    <form action="{{ route('doctors.destroy', $doctor) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الطبيب؟')">حذف</button>
                    </form>
                    <a href="{{ url('/adminpanel/doctors') }}" class="btn btn-secondary">رجوع</a>

                </div>
            </div>
        </div>
    </div>
@endsection
