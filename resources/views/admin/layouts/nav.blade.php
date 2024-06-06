

{{-- camp uides doctor package --}}


<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-users"></i>
      <p>
    مجموعة الرحلة
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{url('/adminpanel/camp_doctor_guid/create')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>اضافة مجموعة </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{url('/adminpanel/camp_doctor_guid/')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>كل المجموعات</p>
        </a>
      </li>

    </ul>
  </li>


          {{-- website --}}


<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-users"></i>
    <p>
    صفحات الموقع
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
  <li class="nav-item">
      <a href="{{url('/')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>الصفحة الرئيسية</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{url('/ShowAllBuilding')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>كل الأماكن</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{url('/search')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>بحث</p>
      </a>
    </li>

  </ul>
</li>



{{-- users --}}


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               المستخدمين
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/adminpannel/users/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة مستخدم</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/adminpannel/users')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>كل المستخدمين</p>
                </a>
              </li>

            </ul>
          </li>




{{-- campground --}}


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
              أماكن التخييم
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/adminpanel/campground/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة مخيم </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/adminpanel/campground/')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>كل الأماكن</p>
                </a>
              </li>

            </ul>
          </li>
{{-- Visitor --}}


<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-users"></i>
      <p>
       الزائرين
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{url('/adminpanel/visitors/create')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>إضافة  زائر </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{url('/adminpanel/visitors/')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>كل  الزائرين</p>
        </a>
      </li>

    </ul>
  </li>



{{-- Guides --}}


<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-users"></i>
      <p>
        الأدلة السياحيين
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{url('/adminpanel/guides/create')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>إضافة دليل سياحي </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{url('/adminpanel/guides/')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>كل الأدلة السياحيين</p>
        </a>
      </li>

    </ul>
  </li>

{{-- Doctors --}}


<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-users"></i>
      <p>
        الأطباء
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{url('/adminpanel/doctors/create')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>إضافة طبيب </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{url('/adminpanel/doctors/')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>كل الأطباء</p>
        </a>
      </li>

    </ul>
  </li>



{{-- Reservations --}}


<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-users"></i>
      <p>
        الحجوزات
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{url('/adminpanel/reservations/create')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>إضافة حجز </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{url('/adminpanel/reservations/')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>كل الحجوزات</p>
        </a>
      </li>

    </ul>
  </li>




{{--   setting --}}

  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-edit"></i>
      <p>
        إعدادات الموقع
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="/adminpannel/sitesitting" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>الإعدادات الرئيسية</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="pages/tables/data.html" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>إعدادات أخرى</p>
        </a>
      </li>

    </ul>
  </li>




            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle text-danger"></i>
              <p>
             <!--  {Auth::user()->name}}-->
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">

                 <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

 <form id="logout-form"  action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    </form>



                </a>
              </li>


            </ul>
          </li>
