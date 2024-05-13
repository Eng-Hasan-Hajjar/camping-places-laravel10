@extends('admin.layouts.layout')

@section('title')
       edit camp
@endsection
@section('header')
{{ Html::style('hdesign/hstyle.css') }}

{!! Html::style('cus/css/select2.css') !!}


@endsection
@section('content')
    <div class="container helementedit">
        <div class="card ">
            <div class="card-header">تعديل </div>

            <div class="card-body">
                <form method="post" action="{{ route('campground.update', $id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    @include('backend.campGrounds.formEdit')

                </form>
            </div>
        </div>
    </div>
@endsection




@section('footer')


 {!! Html::script('cus/js/select2.js') !!}

  <script type="text/javascript">

    $('.select2').select2();

  </script>

@endsection
