<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.head')

</head>

<body>




    @include('frontend.layouts.spinner')

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">

        @include('frontend.layouts.nav')

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    @include('frontend.layouts.aboutus')
    <!-- About End -->


    @include('frontend.layouts.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('frontend.layouts.javascript')
</body>

</html>
