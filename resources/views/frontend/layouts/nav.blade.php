
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ App::getLocale() == 'ar' ? 'rtl' : 'ltr' }}">


<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h3 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Camping Tourism</h3>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav {{ App::getLocale() == 'ar' ? 'me-auto' : 'ms-auto' }} py-0">
            <a href="/" class="nav-item nav-link active">{{ __('Home') }}</a>
            <a href="regions" class="nav-item nav-link">{{ __('Campgrounds') }}</a>
            <a href="destination" class="nav-item nav-link">{{ __('Destination') }}</a>
            <a href="about" class="nav-item nav-link">{{ __('About') }}</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('Your destination') }}</a>
                <div class="dropdown-menu m-0">
                    <a href="castles" class="dropdown-item">{{ __('Castles') }}</a>
                    <a href="caves" class="dropdown-item">{{ __('Caves') }}</a>
                </div>
            </div>
            <a href="contact" class="nav-item nav-link">{{ __('Contact') }}</a>
        </div>

        <div class="navbar-nav {{ App::getLocale() == 'ar' ? 'ms-auto' : 'me-auto' }} py-0">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('Dashboard') }}</a>
                    @else
                        <a href="/login" class="btn btn-primary rounded-pill py-2 px-4" style="margin-left: 5px">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a href="/register" class="btn btn-primary rounded-pill py-2 px-4">{{ __('Register') }}</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <div class="navbar-nav py-0">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('Language') }}</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('locale.change', ['locale' => 'en']) }}" class="dropdown-item">English</a>
                    <a href="{{ route('locale.change', ['locale' => 'ar']) }}" class="dropdown-item">العربية</a>
                </div>
            </div>
        </div>
    </div>
</nav>









