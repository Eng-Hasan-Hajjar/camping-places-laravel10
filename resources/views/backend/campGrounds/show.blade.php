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


    @if (Auth::check())
    <form action="{{ route('ratings.store') }}" method="POST">
        @csrf
        <input type="hidden" name="campground_id" value="{{ $data->id }}">

        <div class="form-group">
            <label for="rating">التقييم:</label>
            <input id="rating" name="rating" type="number" class="rating" min="0" max="5" step="1" data-size="lg" required>
        </div>

        <div class="form-group">
            <label for="comment">تعليق:</label>
            <textarea name="comment" id="comment" rows="4" maxlength="500" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">إرسال التقييم</button>
    </form>
@endif

@endsection



<script>
    $(document).ready(function(){
        $('#rating').rating({
            showClear: false,
            showCaption: true
        });
    });
</script>


<style>
.form-group {
    margin-bottom: 1.5rem;
}

.rating {
    display: inline-block;
}

textarea.form-control {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}



    </style>

