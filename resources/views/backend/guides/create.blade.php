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



                        <form method="POST" action="{{ route('guides.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">الاسم  </label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">الهاتف  </label>
                                <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone') }}">
                            </div>
                            <div class="form-group">
                                <label for="is_free"> حالة الدليل</label>
                                <select name="is_free" class="form-control" id="is_free">
                                        <option value="1">متفرغ</option>
                                        <option value="0">غير متفرغ</option>
                                </select>
                            </div>




                            <button type="submit" class="btn btn-primary">حفظ </button>


                                <!-- زر الرجوع -->
                                <a href="{{ url('/adminpanel/guides') }}" class="btn btn-secondary" >  الأدلة السياحيين </a>





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
