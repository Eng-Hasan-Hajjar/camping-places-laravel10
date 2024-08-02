<!DOCTYPE html>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ App::getLocale() == 'ar' ? 'rtl' : 'ltr' }}">


<head>
    @include('frontend.layouts.head')
</head>

<body>
    @include('frontend.layouts.spinner')


        <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">

        @include('frontend.layouts.arabicnav')

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">   استمتع بالتخييم معنا </h1>
                    <!--      <p class="fs-4 text-white mb-4 animated slideInDown">"Discover new places around the Armenia and enjoy a wonderful camping experience in complete safety and an environment full of adventures and natural beauty. An unforgettable experience awaits you!"</p>
                      <div class="position-relative w-75 mx-auto animated slideInDown">
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Ex: museums ">
                            <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                        </div>
                    -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->

    @include('frontend.layouts.aboutus')

    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5" style="direction: rtl;">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">الخدمات</h6>
                <h1 class="mb-5">خدماتنا </h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>جولات حول العالم  </h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>الحجوزات الفندقية  </h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>أدلة سياحيين </h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>أحداث </h5>
                            <p></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->
<!-- Campgrounds Start -->
<div class="container-xxl py-5 destination" style="direction: rtl;">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">مواقع التخييم</h6>
            <h1 class="mb-5">استكشف مواقع التخييم</h1>
        </div>
        <div class="row g-3">
            @if(count((array)$campgrounds) > 0)
                @foreach($campgrounds as $key => $e)
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s" style="margin-top:20px;">
                        <div class="card" style="border: solid; border-color: #86b817;">
                            <div class="card-img-container" style="height: 200px; overflow: hidden;">
                                <img src="{{ URL::to('/') }}/images/{{ $e->campGround_image }}" class="card-img-top img-fluid" style="height: 100%; object-fit: cover;" alt="{{ $e->name }}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: bolder; color: #86b817;">{{$e->name}}</h5>
                                <p class="card-text" style="font-weight: bolder; color: #86b817;">المدينة: {{$e->city}}</p>
                                <p class="card-text" style="font-weight: bolder; color: #86b817;">المنطقة: {{$e->region}}</p>
                                <p class="card-text" style="font-weight: bolder; color: #86b817;">
                                    النوع:
                                    @if($e->cm_type == 0) غابة
                                    @elseif($e->cm_type == 1) صحراء
                                    @elseif($e->cm_type == 2) جبال
                                    @endif
                                </p>
                                <p class="card-text" style="font-weight: bolder; color: #86b817;">
                                    الفصل:
                                    @if($e->cm_season == 0) الشتاء
                                    @elseif($e->cm_season == 1) الخريف
                                    @elseif($e->cm_season == 2) الربيع
                                    @elseif($e->cm_season == 3) الصيف
                                    @endif
                                </p>
                                <a href="{{url('/singelcamp', $e->id)}}" class="btn btn-primary" style="background-color:#86b817; color:#fff;">أظهر التفاصيل</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-danger">
                    "لايوجد بعد"
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Campgrounds End -->






<!-- Booking Start -->

@include('frontend.layouts.reservationform')
@include('frontend.layouts.modalReservation')
<!-- Booking End -->





    <!-- Process Start -->
    <div class="container-xxl py-5" style="direction: rtl;">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">العملية</h6>
                <h1 class="mb-5">  ثلاث خطوات بسيطة </h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">حدد وجهتك</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0"></p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">الدفع اون لاين</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0"></p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">طيران اليوم</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->



    @include('frontend.layouts.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('frontend.layouts.javascript')


</body>

</html>
