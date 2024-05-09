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
            <div class="card-header">التفاصيل </div>

            <div class="card-body hcard-body">
                <!-- تفاصيل الحجز -->

                <p><strong> الاسم:</strong> {{ $guide->name }}</p>
                <p><strong> الهاتف:</strong> {{ $guide->phone}}</p>
                <p><strong> حالة الدليل:</strong> @if($guide->is_free == 1)  متفرغ  @else غير متفرغ  @endif</p>

                <!-- أزرار التحكم -->
                <div class="btn-group">
                    <a href="{{ route('guides.edit', $guide) }}" class="btn btn-primary">تعديل</a>

                    <form action="{{ route('guides.destroy', $guide) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الدليل')">حذف</button>
                    </form>
                    <a href="{{ url('/adminpanel/guides') }}" class="btn btn-secondary">رجوع</a>

                </div>
            </div>
        </div>
    </div>
@endsection
