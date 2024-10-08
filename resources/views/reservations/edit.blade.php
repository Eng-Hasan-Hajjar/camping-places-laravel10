<!-- resources/views/reservations/edit.blade.php -->

@extends(Auth::user()->can('isEmployee') || Auth::user()->can('isAdmin') ? 'admin.layouts.layout' : 'admin.layouts.layoutvisitor')

@section('title')
    control of camping places
@endsection

@section('header')
{{ Html::style('hdesign/hstyle.css') }}
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection
@section('content')
    <div class="container helementedit">
        <div class="card ">
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


            <div class="card-header">تعديل الحجز</div>

            <div class="card-body">
                <form method="POST" action="{{ route('reservations.update', $reservation) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="user_id"> المستخدم</label>
                        <input type="text" name="user_id" class="form-control" id="user_id" value="{{ $reservation->user->name }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="camp_doctor_guid_id">مجموعة المكان والطبيب والدليل</label>
                        <select name="camp_doctor_guid_id" class="form-control" id="camp_doctor_guid_id">
                            @foreach($campDoctorGuid as $cdg)
                                <option value="{{ $cdg->id }}">{{ $cdg->display_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="start_date">تاريخ البداية</label>
                        <input type="date" name="start_date" class="form-control" id="start_date" value="{{ isset($_POST['start_date']) ? $_POST['start_date'] : $reservation->start_date }}">
                    </div>

                    <div class="form-group">
                        <label for="end_date">تاريخ الانتهاء</label>
                        <input type="date" name="end_date" class="form-control" id="end_date" value="{{ isset($_POST['end_date']) ? $_POST['end_date'] : $reservation->end_date }}">
                    </div>

                    <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                     <!-- زر الرجوع -->
                     <a href="{{ url('/adminpanel/reservations ') }}" class="btn btn-secondary">رجوع</a>

                </form>
            </div>
        </div>
    </div>
@endsection


