


<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h3 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Armenia Tourism</h3>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="/" class="nav-item nav-link active">Home</a>
            <a href="regions" class="nav-item nav-link">Regions</a>

            <a href="destination" class="nav-item nav-link">Destination</a>
            <a href="about" class="nav-item nav-link">About</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Your distination</a>
                <div class="dropdown-menu m-0">
                    <a href="castles" class="dropdown-item">castles</a>
                    <a href="caves" class="dropdown-item">caves</a>
                    <a href="springs" class="dropdown-item">springs</a>
                    <a href="churches" class="dropdown-item">churches</a>
                    <a href="forests" class="dropdown-item">forests</a>
                    <a href="gardens" class="dropdown-item">gardens</a>
                    <a href="lakes" class="dropdown-item">lakes</a>
                    <a href="malls" class="dropdown-item">malls</a>
                    <a href="mountains" class="dropdown-item">mountains</a>
                    <a href="museums" class="dropdown-item">museums</a>
                    <a href="slopes" class="dropdown-item">slopes</a>
                    <a href="threaters" class="dropdown-item">threaters</a>
                    <a href="campgrounds" class="dropdown-item">campgrounds</a>
                </div>
            </div>
            <a href="contact" class="nav-item nav-link">Contact</a>
        </div>

        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
            <a href="/login" class="btn btn-primary rounded-pill py-2 px-4" style="margin-right: 5px">Login </a>

                @if (Route::has('register'))
                <a href="/register" class="btn btn-primary rounded-pill py-2 px-4">Register </a>
                @endif
            @endauth
        </div>
    @endif


    </div>
</nav>
