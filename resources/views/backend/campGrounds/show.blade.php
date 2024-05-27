@extends('admin.layouts.layout')
@section('title')
    معلومات عن المكان
@endsection

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
   .rate {
       float: left;
       height: 46px;
       padding: 0 10px;
       }
       .rate:not(:checked) > input {
       position:absolute;
       display: none;
       }
       .rate:not(:checked) > label {
       float:right;
       width:1em;
       overflow:hidden;
       white-space:nowrap;
       cursor:pointer;
       font-size:30px;
       color:#ccc;
       }
       .rated:not(:checked) > label {
       float:right;
       width:1em;
       overflow:hidden;
       white-space:nowrap;
       cursor:pointer;
       font-size:30px;
       color:#ccc;
       }
       .rate:not(:checked) > label:before {
       content: '★ ';
       }
       .rate > input:checked ~ label {
       color: #ffc700;
       }
       .rate:not(:checked) > label:hover,
       .rate:not(:checked) > label:hover ~ label {
       color: #deb217;
       }
       .rate > input:checked + label:hover,
       .rate > input:checked + label:hover ~ label,
       .rate > input:checked ~ label:hover,
       .rate > input:checked ~ label:hover ~ label,
       .rate > label:hover ~ input:checked ~ label {
       color: #c59b08;
       }
       .star-rating-complete{
          color: #c59b08;
       }
       .rating-container .form-control:hover, .rating-container .form-control:focus{
       background: #fff;
       border: 1px solid #ced4da;
       }
       .rating-container textarea:focus, .rating-container input:focus {
       color: #000;
       }
       .rated {
       float: left;
       height: 46px;
       padding: 0 10px;
       }
       .rated:not(:checked) > input {
       position:absolute;
       display: none;
       }
       .rated:not(:checked) > label {
       float:right;
       width:1em;
       overflow:hidden;
       white-space:nowrap;
       cursor:pointer;
       font-size:30px;
       color:#ffc700;
       }
       .rated:not(:checked) > label:before {
       content: '★ ';
       }
       .rated > input:checked ~ label {
       color: #ffc700;
       }
       .rated:not(:checked) > label:hover,
       .rated:not(:checked) > label:hover ~ label {
       color: #deb217;
       }
       .rated > input:checked + label:hover,
       .rated > input:checked + label:hover ~ label,
       .rated > input:checked ~ label:hover,
       .rated > input:checked ~ label:hover ~ label,
       .rated > label:hover ~ input:checked ~ label {
       color: #c59b08;
       }
</style>
</head>


@section('content')
    <div class="jumbotron text-center">
        <div align="right" style="width: 335px; margin-left: 335px ;margin-bottom: 20px">
            <a href="{{ route('campground.index') }}" class="btn btn-default">  رجوع </a>
        </div>
        <br />
        @if (Auth::check())
        <!-- عرض رسائل الجلسة -->
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

    @endif


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




        <div class="container">
            <div class="row">
               <div class="col mt-4">
                  <form class="py-2 px-4" action="{{route('ratings.store')}}" style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
                     @csrf
                     <p class="font-weight-bold ">التقييم </p>
                     <div class="form-group row">
                        <input type="hidden" name="camp_ground_id" value="{{ $data->id }}">
                        <div class="col">
                           <div class="rate">
                              <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                              <label for="star5" title="text">5 stars</label>
                              <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                              <label for="star4" title="text">4 stars</label>
                              <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                              <label for="star3" title="text">3 stars</label>
                              <input type="radio" id="star2" class="rate" name="rating" value="2">
                              <label for="star2" title="text">2 stars</label>
                              <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                              <label for="star1" title="text">1 star</label>
                           </div>
                        </div>
                     </div>
                     <div class="form-group row mt-4">
                        <div class="col">
                           <textarea class="form-control" name="comment" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                        </div>
                     </div>
                     <div class="mt-3 text-right">
                        <button class="btn btn-sm py-2 px-3 btn-info"> تقييم
                        </button>
                     </div>
                  </form>
               </div>
            </div>
         </div>





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

.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}

.alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}

.alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
}


    </style>

