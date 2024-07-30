<!-- resources/views/reservations/show.blade.php -->

@extends('admin.layouts.layoutvisitor')

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
            <div class="card-header " style="position:center;text-align:center">التفاصيل </div>

            <div class="card-body hcard-body">
                <table>
                    <tr>
                        <td>
                            <p><strong> الاسم:</strong>
                                {{ Auth::user()->name }}
                           </p>
                    </td>
                        <td>
                            <p><strong> الهاتف:</strong> {{ $visitor->phone}}</p>
                    </td>

                    </tr>
                    <tr>
                        <td>

                             <p><strong> العمل:</strong> {{  $visitor->work}}</p>
                    </td>
                        <td>

                <p><strong> الهواية:</strong> {{ $visitor->hobby}}</p>
                    </td>

                    </tr>
                    <tr>
                        <td>
                            <p><strong> الجنسية:</strong> {{ $visitor->nationality}}</p>
                    </td>
                        <td>

                <p><strong> الموقع الحالي:</strong> {{ $visitor->current_location}}</p>
                    </td>

                    </tr>
                    <tr>
                        <td>
                            <p><strong> الجنس:</strong>   @if($visitor->gender == 0) ذكر @else أنثى @endif</p>
                    </td>
                        <td>
                            <p><strong> عدد المرافقين:</strong> {{ $visitor->num_companion}}</p>
                    </td>

                    </tr>
                    <tr>
                        <td>
                            <p><strong> فوبيا الظلام:</strong> @if($visitor->is_phobia_dark == 0) لايوجد @else يوجد @endif</p>

                    </td>
                        <td>
                            <p><strong> فوبيا الحيوانات:</strong>  @if($visitor->is_phobia_animals == 0) لايوجد @else يوجد @endif</p>

                    </td>

                    </tr>

                    <tr>
                        <td>
                            <p><strong> فوبيا الطيران:</strong>   @if($visitor->is_phobia_fly == 0) لايوجد @else يوجد @endif</p>

                    </td>
                        <td>
                            <p><strong> فوبيا البحر:</strong>  @if($visitor->is_phobia_see == 0) لايوجد @else يوجد @endif</p>

                    </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong> فوبيا الأماكن المفتوحة:</strong> @if($visitor->is_phobia_open_space == 0) لايوجد @else يوجد @endif</p>

                    </td>
                        <td>
                            <p><strong> فوبيا المرتفعات:</strong>  @if($visitor->is_phobia_hights == 0) لايوجد @else يوجد @endif</p>

                        </td>

                    </tr>

                    <tr>

                        <td>

                        </td>
                        <td>
                            <p><strong> تاريخ الميلاد:</strong> {{ $visitor->birthday }}</p>

                        </td>

                    </tr>

                  </table>

                <!-- تفاصيل  -->






                <div class="btn-group">
                    <a href="{{ route('visitors.edit', $visitor) }}" class="btn btn-primary">تعديل</a>

                    <a href="{{ url('dashboard') }}" class="btn btn-secondary">رجوع</a>

                </div>






            </div>
        </div>
    </div>
@endsection























