<center>


@if(count((array)$campgrounds) > 0)




    <div class="row" style="margin-top:20px" >
@foreach( $campgrounds  as $key => $e)

 	@if($key % 3 == 0 && $key != 0)
 		<div class="clearfix"></div>
 	@endif
                <div class="col-md-5"style="font-weight: 900;margin:20px;direction: rtl;border:solid ;border-color:#86b817;">

                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing"style="direction: rtl;border-color:#86b817;">
                        <div class="media col-sm-12"style="background:#fff"style="font-weight: bolder;">
                        	   <div class="col-sm-4"style="font-weight: bolder;">
                            <a class="pull-left"style="font-weight: bolder;">
                          <img src="{{ URL::to('/') }}/images/{{ $e->campGround_image }}" class="img-thumbnail" style="margin:30px;padding:20px" />
                                </div>
                            <div class="media-body col-sm-8">
                                <a href="#" target="_parent"></a>
                                <h2 class="media-heading" style="font-weight: bolder;color:#86b817;margin-top:10px">  {{$e->name}}</h2>

                                <hr>
                                <p  style="font-weight: bolder;color:#86b817" >المدينة : {{$e->city}}</p>
                                <hr>
                                <p style="margin:10px; bolder;color:#86b817"> المنطقة:  {{$e->region}}</p>
                                <hr>


                                <p  style="font-weight: bolder;color:#86b817">النوع :@if($e->cm_type== 0) "غابة"
                                                    @elseif ($e->cm_type== 1) "صحراء"
                                                    @elseif ($e->cm_type== 2)  "جبال"
                                                    @endif </p>
                                 <hr>
                                <p  style="font-weight: bolder;color:#86b817">الفصل :@if($e->cm_season== 0) "الشتاء"
                                                  @elseif ($e->cm_season== 1) "الخريف"
                                                  @elseif ($e->cm_season== 2) "الربيع"
                                                  @elseif ($e->cm_season== 3)  "الصيف"
                                                @endif</p>

<hr>
                              <a href="{{url('/singelcamp',$e->id)}}" class="btn btn-block bg-gradient-info btn-xs  colorHasan"
                               role="button"
                              style="background-color:#86b817; color:#fff;margin-bottom:10px">أظهر التفاصيل
                              <span class="fa fa-arrow-circle-o-left" style="..."></span> </a>
                            </div>
                        </div>
                    </div><!-- End Listing-->
                </div>
    @endforeach
      </div><!-- End row -->
    <div class="clearfix">
    </div>
@else
    <div class="alert alert-danger">
      "لايوجد بعد"
    </div>
@endif


</center>
