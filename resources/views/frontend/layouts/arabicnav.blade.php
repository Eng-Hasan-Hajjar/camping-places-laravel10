

<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" style="direction: rtl;">
    <a href="" class="navbar-brand p-0">
        <h3 class="text-primary m-0" style="background-color: rgb(255, 14, 14)"><i class="fa fa-map-marker-alt me-3" style="background-color: rgb(255, 14, 14)"></i>  الليل المضيء         </h3>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="/" class="nav-item nav-link active">             </a>
            <a href="/" class="nav-item nav-link active">      الرئيسية       </a>
            <a href="/showallcamp" class="nav-item nav-link">أماكن التخييم </a>
            <a href="ratings" class="nav-item nav-link"> التقييمات </a>


            <div class="nav-item dropdown" style="direction: rtl;">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> وجهتك </a>

                <div class="dropdown-menu m-0" style="direction: rtl;">
                    <center>
                    <a href="forest" class="dropdown-item">غابة</a>
                    <a href="desert" class="dropdown-item">صحراء</a>
                    <a href="mountain" class="dropdown-item">جبل</a>
                </center>
                </div>

            </div>

        </div>

        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
            <a href="/login" class="btn btn-primary rounded-pill py-2 px-4" style="margin-right: 5px">تسجيل الدخول  </a>

                @if (Route::has('register'))
                <a href="/register" class="btn btn-primary rounded-pill py-2 px-4">انشاء الحساب   </a>
                @endif
            @endauth
        </div>
    @endif


    </div>
</nav>
