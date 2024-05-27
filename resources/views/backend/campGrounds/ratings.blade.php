<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<h2>التقييمات:</h2>
@foreach ($ratings as $rating)


    <div class="container">
        <div class="row">
        <div class="col mt-4">
                <p class="font-weight-bold ">التقييم </p>
                <div class="form-group row">
                    <input type="hidden" name="camp_ground_id" value="{{ $rating->id }}">
                    <div class="col">
                    <div class="rated">
                        @for($i=1; $i<=$rating->rating; $i++)
                        {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                        <label class="star-rating-complete" title="text">{{$i}} stars</label>
                        @endfor
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <div class="col">
                        <strong>{{ $rating->user->name }}</strong>
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <div class="col">
                        <p>التقييم: {{ $rating->rating }}</p>
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <div class="col">
                        <p>{{ $rating->comments }}</p>
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <div class="col">
                        <p>{{ $rating->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
        </div>
        </div>
    </div>


@endforeach




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
