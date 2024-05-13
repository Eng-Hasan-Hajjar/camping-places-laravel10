@extends('admin.layouts.layout')
@section('title')
    معلومات عن المكان
@endsection
@section('content')
    <div class="jumbotron text-center">
        <div align="right" style="width: 335px; margin-left: 335px ;margin-bottom: 20px">
            <a href="{{ route('campground.index') }}" class="btn btn-default">  رجوع </a>
        </div>
        <br />


        <h3>Name - {{ $data->name }} </h3>
        <h3>description - {{ $data->description }}</h3>
        <h3>country - {{ $data->country }}</h3>
        <h3>city - {{ $data->city }} </h3>
        <h3>region - {{ $data->region }}</h3>

@if ($data->cm_type == 0)
<h3>Type - {{ cm_type_func()[0] }}</h3>
@elseif ($data->cm_type == 1)   <h3>Type - {{ cm_type_func()[1] }}</h3>
@elseif ($data->cm_type == 2)   <h3>Type - {{ cm_type_func()[2] }}</h3>
@else   <h3>Type - {{ cm_type_func()[4] }}</h3>
@endif

        @if ($data->cm_season == 0)
            <h3>season - {{ cm_season_func()[0] }}</h3>
        @elseif ($data->cm_season == 1)
            <h3>season - {{ cm_season_func()[1] }}</h3>
        @elseif ($data->cm_season == 2)
            <h3>season - {{ cm_season_func()[2] }}</h3>
        @else
            <h3>Type - {{ cm_type_func()[4] }}</h3>
        @endif

       
        <img src="{{ URL::to('/') }}/images/{{ $data->campGround_image }}" class="img-thumbnail" />


    </div>
@endsection
