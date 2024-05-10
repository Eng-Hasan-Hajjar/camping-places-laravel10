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



                        <form method="POST" action="{{ route('visitors.store') }}">
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
                                <label for="name">العمل  </label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">الهواية  </label>
                                <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone') }}">
                            </div>
                            <div class="form-group">
                                <label for="name">الجنسية  </label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">الموقع الحالي  </label>
                                <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone') }}">
                            </div>

                            <div class="form-group">
                                <label for="gender"> الجنس </label>
                                <select name="gender" class="form-control" id="gender">
                                        <option value="1">ذكر </option>
                                        <option value="0"> أنثى </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="gender"> عدد المرافقين  </label>
                                <select name="gender" class="form-control" id="gender">
                                        <option value="0"> 0 </option>
                                        <option value="1"> 1 </option>
                                        <option value="2"> 2 </option>
                                        <option value="3"> 3 </option>
                                        <option value="4"> 4 </option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gender"> فوبيا الظلام   </label>
                                <select name="gender" class="form-control" id="gender">
                                        <option value="1"> يوجد </option>
                                        <option value="0"> لايوجد </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="gender"> فوبيا الحيوانات  </label>
                                <select name="gender" class="form-control" id="gender">
                                    <option value="1"> يوجد </option>
                                    <option value="0"> لايوجد </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="gender">  فوبيا الطيران  </label>
                                <select name="gender" class="form-control" id="gender">
                                    <option value="1"> يوجد </option>
                                    <option value="0"> لايوجد </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="gender"> فوبيا البحر   </label>
                                <select name="gender" class="form-control" id="gender">
                                    <option value="1"> يوجد </option>
                                    <option value="0"> لايوجد </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="gender">  فوبيا الأماكن المفتوحة  </label>
                                <select name="gender" class="form-control" id="gender">
                                    <option value="1"> يوجد </option>
                                    <option value="0"> لايوجد </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="gender">  فوبيا المرتفعات  </label>
                                <select name="gender" class="form-control" id="gender">
                                    <option value="1"> يوجد </option>
                                    <option value="0"> لايوجد </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="name">الميلاد  </label>
                                <input type="date" name="name" class="form-control" id="name" value="{{ old('name') }}">
                            </div>




                            <button type="submit" class="btn btn-primary">حفظ </button>


                                <!-- زر الرجوع -->
                                <a href="{{ url('/adminpanel/visitors') }}" class="btn btn-secondary" >  الزائرين  </a>





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
