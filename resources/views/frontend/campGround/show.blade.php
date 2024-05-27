@extends('admin.layouts.layout')
@section('title')
    معلومات عن المكان
@endsection
@section('content')
    <div class="jumbotron text-center">
        <div align="right" style="width: 335px; margin-left: 335px; margin-bottom: 20px">
            <a href="{{ route('campground.index') }}" class="btn btn-default">رجوع</a>
        </div>
        <br />

        <h3>Name - {{ $campground->name }} </h3>
        <h3>Description - {{ $campground->description }}</h3>
        <h3>Country - {{ $campground->country }}</h3>
        <h3>City - {{ $campground->city }}</h3>
        <h3>Region - {{ $campground->region }}</h3>

        @if ($campground->cm_type == 0)
            <h3>Type - {{ cm_type_func()[0] }}</h3>
        @elseif ($campground->cm_type == 1)
            <h3>Type - {{ cm_type_func()[1] }}</h3>
        @elseif ($campground->cm_type == 2)
            <h3>Type - {{ cm_type_func()[2] }}</h3>
        @else
            <h3>Type - {{ cm_type_func()[4] }}</h3>
        @endif

        @if ($campground->cm_season == 0)
            <h3>Season - {{ cm_season_func()[0] }}</h3>
        @elseif ($campground->cm_season == 1)
            <h3>Season - {{ cm_season_func()[1] }}</h3>
        @elseif ($campground->cm_season == 2)
            <h3>Season - {{ cm_season_func()[2] }}</h3>
        @else
            <h3>Type - {{ cm_type_func()[4] }}</h3>
        @endif

        <img src="{{ URL::to('/') }}/images/{{ $campground->campGround_image }}" class="img-thumbnail" />
    </div>

    @if (Auth::check())
        <form action="{{ route('ratings.store') }}" method="POST">
            @csrf
            <input type="hidden" name="campground_id" value="{{ $campground->id }}">

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

    <div class="ratings mt-5">
        <h3>التقييمات:</h3>
        @foreach ($campground->ratings as $rating)
            <div class="rating">
                <p><strong>{{ $rating->user->name }}:</strong> {{ $rating->rating }} نجوم</p>
                <p>{{ $rating->comment }}</p>
                <hr>
            </div>
        @endforeach
    </div>
@endsection

<script>
    $(document).ready(function(){
        $('#rating').rating({
            showClear: false,
            showCaption: true
        });
    });
</script>
