<!-- resources/views/reservations/edit.blade.php -->

@extends('admin.layouts.layout')

@section('title')
   التعديل
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
            <div class="card-header">تعديل </div>

            <div class="card-body">
                <form method="POST" action="{{ route('doctors.update', $doctor) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        {!! Form::label('name', ' الاسم :', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
                        {!! Form::text('name', $doctor->name, ['class' => ' col-md-6']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('phone', 'الهاتف :', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
                        {!! Form::text('phone', $doctor->phone, ['class' => ' col-md-6']) !!}
                    </div>



                    <div class="form-group">
                        <label for="is_free"> حالة الطبيب</label>
                        <select name="is_free" class="form-control" id="is_free">
                                <option value="1">"متفرغ" </option>
                                <option value="0">" غير متفرغ"</option>
                        </select>
                    </div>

                    <div class="form-group">
                        {!! Form::label('specialty', 'حالة الطبيب :', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
                        {!! Form::text('specialty', $doctor->specialty, ['class' => ' col-md-6']) !!}
                    </div>


                    <button type="submit" class="btn btn-primary">حفظ </button>
                    <!-- زر الرجوع -->
                    <a href="{{ url('/adminpanel/doctors') }}" class="btn btn-secondary" >  الأطباء </a>
                </form>
            </div>
        </div>
    </div>
@endsection


