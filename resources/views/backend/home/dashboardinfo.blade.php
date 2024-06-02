
<head>
    <!-- إضافة Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


<div class="container mt-5">

    <div class="">

        @if(Auth::user()->can('isEmployee') || Auth::user()->can('isAdmin'))

            <div class="row mb-3">
                <div class="col-md-3">
                    <a href="{{url('/adminpanel/reservations/create')}}" class="btn btn-success">إضافة حجز  جديد</a>
                </div>
                <div class="col-md-3">
                    <a href="{{url('/adminpanel/doctors/create')}}" class="btn btn-danger">إضافة طبيب جديد</a>
                </div>
                <div class="col-md-3">
                    <a href="{{url('/adminpanel/guides/create')}}" class="btn btn-warning">إضافة دليل جديد</a>
                </div>
                <div class="col-md-3">
                    <a href="{{url('/adminpanel/campground/create')}}" class="btn btn-info">إضافة مكان تخييم جديد</a>
                </div>
            </div>
        @else


        @endif

    </div>


    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user"></i> عدد الزائرين</h5>
                    <p class="card-text display-4">{{ $visitorCount }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card text-white bg-secondary">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user-tie"></i> عدد الموظفين</h5>
                    <p class="card-text display-4">{{ $employeeCount }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user-shield"></i> عدد المدراء</h5>
                    <p class="card-text display-4">{{ $adminCount }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-stethoscope"></i> عدد الأطباء</h5>
                    <p class="card-text display-4">{{ $doctorCount }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-map-signs"></i> عدد الأدلة</h5>
                    <p class="card-text display-4">{{ $guideCount }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card text-white bg-info">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-campground"></i> عدد أماكن التخييم</h5>
                    <p class="card-text display-4">{{ $campGroundCount }}</p>
                </div>
            </div>
        </div>



        <div class="col-md-3 mb-4">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-campground"></i> عدد الحجوزات السارية</h5>
                    <p class="card-text display-4">{{ $activeReservationsCount }}</p>
                </div>
            </div>
        </div>


    </div>












</div>
