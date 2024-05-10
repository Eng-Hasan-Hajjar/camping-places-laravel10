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
                                <label for="phone">الهاتف  </label>
                                <input type="phone" name="phone" class="form-control" id="phone" value="{{ old('phone') }}">
                            </div>

                            <div class="form-group">
                                <label for="work">العمل  </label>
                                <input type="text" name="work" class="form-control" id="work" value="{{ old('work') }}">
                            </div>
                            <div class="form-group">
                                <label for="hobby">الهواية  </label>
                                <input type="text" name="hobby" class="form-control" id="hobby" value="{{ old('hobby') }}">
                            </div>
                            <div class="form-group">
                                <label for="nationality">الجنسية  </label>
                                <input type="text" name="nationality" class="form-control" id="nationality" value="{{ old('nationality') }}">
                            </div>
                            <div class="form-group">
                                <label for="current_location">الموقع الحالي  </label>
                                <input type="text" name="current_location" class="form-control" id="current_location" value="{{ old('current_location') }}">
                            </div>

                            <div class="form-group">
                                <label for="gender"> الجنس </label>
                                <select name="gender" class="form-control" id="gender">
                                        <option value="1">ذكر </option>
                                        <option value="0"> أنثى </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="num_companion"> عدد المرافقين  </label>
                                <select name="num_companion" class="form-control" id="num_companion">
                                        <option value="0"> 0 </option>
                                        <option value="1"> 1 </option>
                                        <option value="2"> 2 </option>
                                        <option value="3"> 3 </option>
                                        <option value="4"> 4 </option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="is_phobia_dark"> فوبيا الظلام   </label>
                                <select name="is_phobia_dark" class="form-control" id="is_phobia_dark">
                                        <option value="1"> يوجد </option>
                                        <option value="0"> لايوجد </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="is_phobia_animals"> فوبيا الحيوانات  </label>
                                <select name="is_phobia_animals" class="form-control" id="is_phobia_animals">
                                    <option value="1"> يوجد </option>
                                    <option value="0"> لايوجد </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="is_phobia_fly">  فوبيا الطيران  </label>
                                <select name="is_phobia_fly" class="form-control" id="is_phobia_fly">
                                    <option value="1"> يوجد </option>
                                    <option value="0"> لايوجد </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="is_phobia_see"> فوبيا البحر   </label>
                                <select name="is_phobia_see" class="form-control" id="is_phobia_see">
                                    <option value="1"> يوجد </option>
                                    <option value="0"> لايوجد </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="is_phobia_open_space">  فوبيا الأماكن المفتوحة  </label>
                                <select name="is_phobia_open_space" class="form-control" id="is_phobia_open_space">
                                    <option value="1"> يوجد </option>
                                    <option value="0"> لايوجد </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="is_phobia_hights">  فوبيا المرتفعات  </label>
                                <select name="is_phobia_hights" class="form-control" id="is_phobia_hights">
                                    <option value="1"> يوجد </option>
                                    <option value="0"> لايوجد </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="birthday">الميلاد  </label>
                                <input type="date" name="birthday" class="form-control" id="birthday" value="{{ old('birthday') }}">
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
