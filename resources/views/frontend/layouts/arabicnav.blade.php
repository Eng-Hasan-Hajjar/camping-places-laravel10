

<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" style="direction: rtl;">
    <a href="" class="navbar-brand p-0">
        <h3 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i> ليلة مضيئة         </h3>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="/" class="nav-item nav-link active">             </a>
            <a href="/" class="nav-item nav-link active">      الرئيسية       </a>
            <a href="regions" class="nav-item nav-link">أماكن التخييم </a>

            <a href="destination" class="nav-item nav-link">الوجهة </a>
            <a href="about" class="nav-item nav-link">حول </a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> وجهتك </a>
                <div class="dropdown-menu m-0">
                    <a href="castles" class="dropdown-item">castles</a>
                    <a href="caves" class="dropdown-item">caves</a>


                </div>
            </div>
            <a href="contact" class="nav-item nav-link">التواصل </a>
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
