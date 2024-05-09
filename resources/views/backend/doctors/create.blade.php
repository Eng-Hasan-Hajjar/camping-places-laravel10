<!-- resources/views/reservations/create.blade.php -->

@extends('admin.layouts.layout')

@section('title')
التحكم
@endsection

@section('header')
{{ Html::style('hdesign/hstyle.css') }}
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection

@section('content')
    <div class="container helement">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header ">إنشاء جديد</div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    </div>
                    @endif
                    <div class="card-body ">



                        <form method="POST" action="{{ route('doctors.store') }}">
                            @csrf



                            <div class="form-group">
                                <label for="name">الاسم  </label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="specialty">الاختصاص  </label>
                                <input type="text" name="specialty" class="form-control" id="specialty" value="{{ old('specialty') }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">الهاتف  </label>
                                <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone') }}">
                            </div>
                            <div class="form-group">
                                <label for="camp_ground_id"> المكان</label>
                                <select name="camp_ground_id" class="form-control" id="camp_ground_id">
                                        <option value="1">متفرغ</option>
                                        <option value="0">غير متفرغ</option>

                                </select>
                            </div>





                            <button type="submit" class="btn btn-primary">حفظ </button>


                                <!-- زر الرجوع -->
                                <a href="{{ url('/adminpanel/doctors') }}" class="btn btn-secondary" >  الأطباء </a>





                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

@endsection
