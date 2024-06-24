<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ App::getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    @include('frontend.layouts.head')

</head>

<body>


    @include('frontend.layouts.spinner')


        <!-- Navbar & Hero Start -->
    <div class="">

        @include('frontend.layouts.arabicnav')



<center>


            <div class="container" style="margin-top:40px;direction:rtl">
                <div class="profile-content" style="margin-top:120px">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="ref">اسم المعسكر: {{$campinfo->name}}</h2>
                            <h2 class="ref">الوصف: {{$campinfo->description}}</h2>
                            <h2 class="ref">الموسم:
                                @if ($campinfo->cm_season == 0)
                                    {{ cm_season_func()[0] }}
                                @elseif ($campinfo->cm_season == 1)
                                    {{ cm_season_func()[1] }}
                                @elseif ($campinfo->cm_season == 2)
                                    {{ cm_season_func()[2] }}
                                @else
                                    {{ cm_season_func()[3] }}
                                @endif
                            </h2>
                            <h2 class="ref">نوع المعسكر:
                                @if ($campinfo->cm_type == 0)
                                    {{ cm_type_func()[0] }}
                                @elseif ($campinfo->cm_type == 1)
                                    {{ cm_type_func()[1] }}
                                @else
                                    {{ cm_type_func()[2] }}
                                @endif
                            </h2>

                        </div>
                        <div class="col-md-6">

                            <h2 class="ref">الدولة: {{$campinfo->country}}</h2>
                            <h2 class="ref">المدينة: {{$campinfo->city}}</h2>
                            <h2 class="ref">المنطقة: {{$campinfo->region}}</h2>
                            <h2 class="ref">التوقعات: {{$campinfo->forecast}}</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="row" style="margin-top: 10px">
                        <div class="col-md-6">
                            <h2>الصورة الرئيسية:</h2>
                            <img src="{{ URL::to('/') }}/images/{{ $campinfo->campGround_image }}" class="img-fluid" style="border: 5px solid; margin: 3px;" />
                        </div>
                        <div class="col-md-6">
                            <h2>صورة غوغل:</h2>
                            <img src="{{ URL::to('/') }}/imagesgoogle/{{ $campinfo->google_image }}" class="img-fluid" style="border: 5px solid; margin: 3px;" />
                        </div>
                    </div>
                    <div class="row" style="margin-top:20px;">
                        <div class="col-md-12">
                            @include('frontend.campground.images', $campinfo)
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <!-- Navbar & Hero End -->


</center>





    @include('frontend.layouts.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('frontend.layouts.javascript')


</body>

</html>



