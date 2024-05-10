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
                <!-- تفاصيل  -->
                <p><strong> الاسم:</strong>  @foreach ($users as $user)
                    @if($user->id == $visitor->user_id)  {{ $user->name }} @endif
                @endforeach</p>
                <p><strong> الهاتف:</strong> {{ $visitor->phone}}</p>
                <p><strong> العمل:</strong> {{  $visitor->work}}</p>
                <p><strong> الهواية:</strong> {{ $visitor->hobby}}</p>
                <p><strong> الجنسية:</strong> {{ $visitor->nationality}}</p>
                <p><strong> الموقع الحالي:</strong> {{ $visitor->current_location}}</p>
                <p><strong> الجنس:</strong>   @if($visitor->gender == 0) ذكر @else أنثى @endif</p>
                <p><strong> عدد المرافقين:</strong> {{ $visitor->num_companion}}</p>
                <p><strong> فوبيا الظلام:</strong> @if($visitor->is_phobia_dark == 0) لايوجد @else يوجد @endif</p>
                <p><strong> فوبيا الحيوانات:</strong>  @if($visitor->is_phobia_animals == 0) لايوجد @else يوجد @endif</p>
                <p><strong> فوبيا الطيران:</strong>   @if($visitor->is_phobia_fly == 0) لايوجد @else يوجد @endif</p>
                <p><strong> فوبيا البحر:</strong>  @if($visitor->is_phobia_see == 0) لايوجد @else يوجد @endif</p>
                <p><strong> فوبيا الأماكن المفتوحة:</strong> @if($visitor->is_phobia_open_space == 0) لايوجد @else يوجد @endif</p>
                <p><strong> فوبيا المرتفعات:</strong>  @if($visitor->is_phobia_hights == 0) لايوجد @else يوجد @endif</p>
                <p><strong> تاريخ الميلاد:</strong> {{ $visitor->birthday }}</p>

                <div class="btn-group">
                    <a href="{{ route('visitors.edit', $visitor) }}" class="btn btn-primary">تعديل</a>
                    <form action="{{ route('visitors.destroy', $visitor) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الزائر؟ ')">حذف</button>
                    </form>
                    <a href="{{ url('/adminpanel/visitors') }}" class="btn btn-secondary">رجوع</a>

                </div>






            </div>
        </div>
    </div>
@endsection























