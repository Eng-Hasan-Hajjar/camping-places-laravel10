
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
            <div class="container py-1">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">   جميع الأماكن المتوفرة</h1>
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

        <div class="container-fluid col-md-12" style="margin-top:0px"  >
            <div class="container dis col-md-12" >
            <div class="row profile"  >
                <div class="col-md-12">

                    <div class="profile-content container-fluid"  style="margin-top:120px">
                        @include('frontend.campground.sharefile')
                    </div>
                </div>
            </div>
        </div>


        <br>
        <br>
        </div>

    </div>
    <!-- Navbar & Hero End -->










    @include('frontend.layouts.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('frontend.layouts.javascript')


</body>

</html>
