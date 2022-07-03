<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
      <a class="sidebar-brand brand-logo img-fluid " href="index.html"><img src="/app_logo/hospital_logo.jpg" style="max-width:34px; max-height:34px" alt="logo" width="34px" height="34px"/></a>
      <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="/app_logo/hospital_logo.jpg" alt="logo" /></a>
    </div>
    <ul class="nav">
      {{-- <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="/admin/template/assets/images/faces/face1.jpg" alt="profile" />
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column pr-3">
            <span class="font-weight-medium mb-2">Henry Klein</span>
            <span class="font-weight-normal">$8,753.00</span>
          </div>
          <span class="badge badge-danger text-white ml-3 rounded">3</span>
        </a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Dashboard') }}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#profile-basic" aria-expanded="false" aria-controls="profile-basic">
          <i class="fas fa-calendar-check me-2"></i>
          <span class="menu-title">Staff</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="profile-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href={{ route('add_staff') }}>Add staff</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href={{ route('staff') }}>View staff</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="fas fa-calendar-check me-2"></i>
          <span class="menu-title">Appointment</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href={{ route('create_appointment') }}>Create Appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('view_appointment') }}">View Appointment</a>
            </li>
          </ul>
        </div>
      </li>
      

      
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-doctor" aria-expanded="false" aria-controls="ui-doctor">
          <i class="fas fa-calendar-check me-2"></i>
          <span class="menu-title">Add Doctors</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-doctor">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href={{ route('add_doctor') }}>Add Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('view_doctor') }}">View Doctors</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('create_permission') }}">
          <i class="fa-solid fa-unlock me-2"></i>
          <span class="menu-title">Role permission</span>
        </a>
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('Dashboard') }}">
          <i class="fas fa-hospital-user me-2"></i>
          <span class="menu-title">Student patient</span>
        </a> --}}

        <li class="nav-item">
          <a class="nav-link" href="{{ route('student_registration') }}">
            {{-- <i class="fas fa-hospital-user me-2"></i> --}}
            <i class="fas fa-book-medical me-2"></i>
            <span class="menu-title">Student registration</span>
          </a>
     
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('student_record') }}">
            {{-- <i class="fas fa-hospital-user me-2"></i> --}}
            <i class="fas fa-book-medical me-2"></i>
            <span class="menu-title">Student Record</span>
          </a>
     
        </li>

      <li class="nav-item sidebar-actions">
        <div class="nav-link">
          <div class="mt-4">
            <div class="border-none">
              <p class="text-black">Notification</p>
            </div>
            <ul class="mt-4 pl-0">
              <li>Sign Out</li>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </nav>