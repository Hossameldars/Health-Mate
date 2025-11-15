<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="{{ url('/' . $page='index') }}"><img src="" class="main-logo" alt=""></a>
        <a class="desktop-logo logo-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Dashboard/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Dashboard/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Dashboard/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('Dashboard/img/faces/health Mate.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
                    <h4 class="font-weight-semibold mt-3 mb-0">Health Mate</h4>
                    <style>
                      
.user-info h4 {
  font-family: "Russo One", sans-serif;
  font-weight:600;
  font-style: normal;
  font-size: 1.5rem !important; /* Adjust the size as needed */
  color: #5D9CEC !important; /* Change the color to match your theme */
}

                      </style>
                </div>
            </div>
        </div>
        <ul class="side-menu">
            
        
<li class="slide">
    <a class="side-menu__item" href="{{route('patient.index')}}">
        <i class="side-menu__icon fas fa-user-injured" style="color: #5D9CEC;"></i>
        <span class="side-menu__label" style="color: #5D9CEC;">Patients</span>
    </a>
</li>
<li class="slide">
    <a class="side-menu__item" href="{{ route('Doctor.index')}}">
        <i class="side-menu__icon fas fa-user-md" style="color: #5D9CEC;"></i>
        <span class="side-menu__label" style="color: #5D9CEC;">Doctor</span>
    </a>
</li>
<li class="slide">
    <a class="side-menu__item" href="{{ route('Doctor_archives.index')}}">
        <i class="side-menu__icon fas fa-archive" style="color: #5D9CEC;"></i>
        <span class="side-menu__label" style="color: #5D9CEC;">Doctor Archives</span>
    </a>
</li>
<li class="slide">
    <a class="side-menu__item" href="{{ route('Doctor_informations.index')}}">
        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" style="color: #5D9CEC;">
            <path d="M4 4h16v16H4V4zm2 2v12h12V6H6zm3 3h6v2H9V9zm0 4h6v2H9v-2z" fill="currentColor"/>
        </svg>
        <span class="side-menu__label" style="color: #5D9CEC;">Doctor Informations</span>
    </a>
</li>
<li class="slide">
    <a class="side-menu__item" href="{{ route('Doctor_information_archives.index')}}">
          <i class="side-menu__icon fas fa-archive" style="color: #5D9CEC;"></i>
        <span class="side-menu__label" style="color: #5D9CEC;">Doctor Informations Archives</span>
    </a>
</li>
        <li class="slide">
    <a class="side-menu__item" href="{{ route('favorite_doctors.index')}}">
        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" style="color: #5D9CEC;">
            <path fill="currentColor" d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
            <path fill="#fff" d="M16.5 5C14.21 5 12 7.21 12 9.5s2.21 4.5 4.5 4.5S21 11.79 21 9.5 18.79 5 16.5 5zm-1.94 4.08l-1.06-1.06L12 9.94 10.94 8.88l-1.06 1.06L9.94 12l-1.06 1.06 1.06 1.06L12 14.06l1.06 1.06 1.06-1.06L14.06 12l1.06-1.06z"/>
        </svg>
        <span class="side-menu__label" style="color: #5D9CEC;">Favorite Doctors</span>
    </a>
</li>
   
<li class="slide">
    <a class="side-menu__item" href="{{route('Appointment.index')}}">
        <div class="position-relative">
            <i class="side-menu__icon fe fe-calendar" style="color: #5D9CEC;"></i>
            <i class="fe fe-clock" style="position: absolute; right: -5px; bottom: -5px; font-size: 0.6em; background: white; padding: 1px; color: #5D9CEC;"></i>
        </div>
        <span class="side-menu__label" style="color: #5D9CEC;">Appointments</span>
    </a>
</li>
                
    <li class="slide">
    <a class="side-menu__item" href="{{route('medical_test.index')}}">
        <i class="side-menu__icon fas fa-flask" style="color: #5D9CEC;"></i>
        <span class="side-menu__label" style="color: #5D9CEC;">Medical Tests</span>
    </a>
</li>    <li class="slide">
    <a class="side-menu__item" href="{{ route('medical_appointment.index') }}">
        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" style="color: #5D9CEC;">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path fill="currentColor" d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11z"/>
            <path d="M12 10v4h4v-4h-4z" fill="#fff"/> <!-- علامة + تبقى بيضاء -->
        </svg>
        <span class="side-menu__label" style="color: #5D9CEC;">Medical Test Appointment</span>
    </a>
</li>
            {{-- canceled appoitment --}}
    <li class="slide">
    <a class="side-menu__item" href="{{ route('canceled_appointment.index')}}">
        <svg xmlns="http://www.w3.org/2000/svg"class="side-menu__icon" viewBox="0 0 24 24" style="color: #5D9CEC;">
            <path fill="currentColor" d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/>
        </svg>
        <span class="side-menu__label" style="color: #5D9CEC;">Canceled Appointments</span>
        
        
    </a>
</li>
        {{--  test_result --}}
<li class="slide">
    <a class="side-menu__item" href="{{ route('test_result.index') }}">
        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" style="color: #5D9CEC;">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-9 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z" opacity=".3"/>
            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zm-9-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z"/>
        </svg>
        <span class="side-menu__label" style="color: #5D9CEC;">Medical Test Results</span>
    </a>
</li>
            
    <li class="slide">
    <a class="side-menu__item" href="{{ route('canceled_test_appointment') }}">
        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" style="color: #5D9CEC;">
            <path d="M0 0h24v24H0z" fill="none"/>
            <!-- Calendar base -->
            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11z" fill="currentColor" opacity="0.3"/>
            <!-- Cancel "X" mark -->
            <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z" fill="currentColor"/>
        </svg>
        <span class="side-menu__label" style="color: #5D9CEC;">Canceled Test Appointments</span>
    </a>
</li>
    <li class="slide">
    <a class="side-menu__item" href="{{ route('cities.index') }}">
        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" style="color: #5D9CEC;">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M15 11V5l-3-3-3 3v2H3v14h18V11h-6zm-8 8H5v-2h2v2zm0-4H5v-2h2v2zm0-4H5V9h2v2zm6 8h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V9h2v2zm0-4h-2V5h2v2zm6 12h-2v-2h2v2zm0-4h-2v-2h2v2z" fill="currentColor"/>
        </svg>
        <span class="side-menu__label" style="color: #5D9CEC;">Cities</span>
    </a>
</li>
            
    <li class="slide">
    <a class="side-menu__item" href="{{ route('users.index') }}">
        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" style="color: #5D9CEC;">
            <path d="M0 0h24v24H0z" fill="none"/>
            <!-- User group icon -->
            <path d="M9 13.75c-2.34 0-7 1.17-7 3.5V19h14v-1.75c0-2.33-4.66-3.5-7-3.5zM4.34 17c.84-.58 2.87-1.25 4.66-1.25s3.82.67 4.66 1.25H4.34zM9 12c1.93 0 3.5-1.57 3.5-3.5S10.93 5 9 5 5.5 6.57 5.5 8.5 7.07 12 9 12zm0-5c.83 0 1.5.67 1.5 1.5S9.83 10 9 10s-1.5-.67-1.5-1.5S8.17 7 9 7zm7.04 6.81c1.16.84 1.96 1.96 1.96 3.44V19h4v-1.75c0-2.02-3.5-3.17-5.96-3.44zM15 12c1.93 0 3.5-1.57 3.5-3.5S16.93 5 15 5c-.54 0-1.04.13-1.5.35.63.92 1.16 1.5 2.53 1.5 4.15s-.58 2.99-1.5 4.15c.46.22.96.35 1.5.35z" fill="currentColor"/>
        </svg>
        <span class="side-menu__label" style="color: #5D9CEC;">Users</span>
    </a>
</li>
    <li class="slide">
    <a class="side-menu__item" href="{{ route('specialization.index')}}">
        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" style="color: #5D9CEC;">
            <path d="M0 0h24v24H0z" fill="none"/>
            <!-- Medical cross with stethoscope -->
            <path d="M19 8h-1V3H6v5H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zM8 5h8v3H8V5zm8 14v-4H8v4H4v-4h3.5v-1.5h9V15H20v4h-4z" opacity="0.3"/>
            <path d="M20 15v4h-4v-1.5h-9V15H4v4H1v-6c0-1.66 1.34-3 3-3h1V3h12v5h1c1.66 0 3 1.34 3 3v6h-3zm-12-6V5h8v3h-8zm-4 8v4h4v-4H4zm12 0v4h4v-4h-4z" fill="currentColor"/>
            <path d="M11 8h2v3h3v2h-3v3h-2v-3H8v-2h3z" fill="#fff"/>
        </svg>
        <span class="side-menu__label" style="color: #5D9CEC;">Specializations</span>
    </a>
</li>
        </ul>
    </div>
</aside>
<!-- main-sidebar -->