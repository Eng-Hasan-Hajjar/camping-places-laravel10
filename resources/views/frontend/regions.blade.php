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
                        <h1 class="display-3 text-white animated slideInDown">Regions</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Regions</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->
    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Regions</h6>
                <h1 class="mb-5">Popular Regions</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="/regions/viewregion/Aragatsotn">
                                <img class="img-fluid" src="frontendAsset/img/regions/Aragatsotn.jpeg" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Aragatsotn</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="/regions/viewregion/Ararat">
                                <img class="img-fluid" src="frontendAsset/img/regions/Ararat.jpeg" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Ararat</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="/regions/viewregion/Armavir">
                                <img class="img-fluid" src="frontendAsset/img/regions/Armavir.jpeg" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Armavir</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="/regions/viewregion/Gegharkunik">
                        <img class="img-fluid position-absolute w-100 h-100" src="frontendAsset/img/regions/Gegharkunik.jpeg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Gegharkunik</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->

 <!-- Destination Start -->
 <div class="container-xxl py-5 destination">
    <div class="container">

        <div class="row g-3">
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="/regions/viewregion/Kotayk">
                    <img class="img-fluid position-absolute w-100 h-100" src="frontendAsset/img/regions/Kotayk.jpeg" alt="" style="object-fit: cover;">
                    <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Kotayk</div>
                </a>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="/regions/viewregion/Lori">
                            <img class="img-fluid" src="frontendAsset/img/regions/Lori.jpeg" alt="">
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Lori</div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="/regions/viewregion/Shirak">
                            <img class="img-fluid" src="frontendAsset/img/regions/Shirak.jpeg" alt="">
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2"> Shirak</div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="/regions/viewregion/Syunik">
                            <img class="img-fluid" src="frontendAsset/img/regions/Syunik.jpeg" alt="">
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Syunik</div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Destination Start -->


<!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">

            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="/regions/viewregion/Tavush">
                                <img class="img-fluid" src="frontendAsset/img/regions/Tavush.jpeg" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Tavush</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="/regions/viewregion/Vayots_Dzor">
                                <img class="img-fluid" src="frontendAsset/img/regions/Vayots Dzor.jpeg" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2"> Vayots Dzor</div>
                            </a>
                        </div>

                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="/regions/viewregion/yerevan">
                                <img class="img-fluid" src="frontendAsset/img/regions/yerevan.jpeg" alt="">
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">yerevan</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="/regions/viewregion/Aragatsotn">
                        <img class="img-fluid position-absolute w-100 h-100" src="frontendAsset/img/regions/Aragatsotn.jpeg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Aragatsotn</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
<!-- Destination Start -->


    @include('frontend.layouts.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('frontend.layouts.javascript')

</body>

</html>
