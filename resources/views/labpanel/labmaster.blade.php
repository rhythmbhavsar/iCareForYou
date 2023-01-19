<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lab-iCareForYou</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets1/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('assets1/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets1/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets1/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets1/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets1/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset('assets1/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{ asset('assets1/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('assets1/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets1/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
       
        <span class="d-none d-lg-block">iCareForYou</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

   

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

       
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            {{-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> --}}
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Session::get('LabLoginId')['email']}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{Session::get('LabLoginId')['email']}}</h6>
              {{-- <span>Web Designer</span> --}}
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            {{-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

           
            <li>
              <hr class="dropdown-divider">
            </li> --}}

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/lab_logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li>


      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/labindex">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->



      <!-- <li class="nav-heading">Pages</li> -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/add_address">
          <i class="bi bi-card-list"></i>
          <span>Add Address</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/l_view_appointment">
          <i class="bi bi-card-list"></i>
          <span>Appointments</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/patients">
          <i class="bi bi-person"></i>
          <span>Patients</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/all_results">
          <i class="bi bi-card-list"></i>
          <span>Results</span>
        </a>
      </li> 
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="/contacted">
          <i class="bi bi-person"></i>
          <span>Contact</span>
        </a>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="/edit_homepage">
          <i class="bi bi-person"></i>
          <span>Home Page Slider</span>
        </a>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="/webreview">
          <i class="bi bi-person"></i>
          <span>Web Review</span>
        </a>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="/productreview">
          <i class="bi bi-person"></i>
          <span>Product Review</span>
        </a>
      </li> --}}
      
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="/lab_users">
          <i class="bi bi-person"></i>
          <span>Lab Assistant Users</span>
        </a>
      </li> --}}
      <!-- End Profile Page Nav -->

      
      

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li> --}}
      <!-- End Register Page Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="/admin_logout">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Log Out</span>
        </a>
      </li> --}}
      <!-- End Logout Page Nav -->

      

    </ul>

  </aside><!-- End Sidebar-->


@yield('content')


  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets1/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('assets1/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets1/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{ asset('assets1/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset('assets1/vendor/quill/quill.min.js')}}"></script>
  <script src="{{ asset('assets1/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{ asset('assets1/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset('assets1/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets1/js/main.js')}}"></script>

</body>

</html>