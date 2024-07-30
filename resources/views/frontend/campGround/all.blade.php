
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
