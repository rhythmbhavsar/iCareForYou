
@extends('userpanel.master')

@section('content')

  {{-- <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>IcareforyoU</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="product.html">Category</a></li>
          
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="cart.html">cart</a></li>
        </ul>
      </nav><!-- .navbar -->
      </div>
    </div>
  </header> --}}
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to iCareForYou</span></h2>
          <p class="animate__animated fanimate__adeInUp">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi sapiente quidem ratione modi blanditiis recusandae.</p>
        </div>
      </div>
      @foreach ($slide as $item)
      
      <!-- Slide 1 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">{{$item->title}}</span></h2>
          <p class="animate__animated fanimate__adeInUp">{{$item->description}}</p>
          
        </div>
      </div>
      @endforeach

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->


    <!-- ======= About Section ======= -->
    

    <!-- ======= Features Section ======= -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  
  <!-- End Footer -->

   <!-- ======= About Section ======= -->
   <section id="about" class="about">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>About</h2>
        <p>Who we are</p>
      </div>

      <div class="row content" data-aos="fade-up">
        <div class="col-lg-6">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a href="#" class="btn-learn-more">Learn More</a>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Portfolio Section ======= -->
  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Testimonials</h2>
        <p>What they are saying about us</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          @foreach ($webreview as $item)
              
        
          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {{$item->message}}
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{asset('upload/user/'.$item->user_img)}}" class="testimonial-img" alt="">
              <h3>  {{$item->name}}</h3>
              <h4>Customer</h4>
            </div>
          </div>
          @endforeach

        </div>
        {{-- <div class="swiper-pagination"></div>
      </div> --}}

    </div>
  </section><!-- End Testimonials Section -->
     <!-- ======= Team Section ======= -->
     <section id="team" class="team">
        <div class="container">
  
          <div class="section-title" data-aos="zoom-out">
            <h2>Team</h2>
            <p>Our Hardworking Team</p>
          </div>
  
          <div class="row">
            <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  
                </div>
              </div>
           
         
              @foreach ($member as $item)
                  
            

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch  border-dark">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="{{asset('upload/teammember/'.$item->member_img)}}" class="img-fluid" alt="" >
                  <div class="social">
                    <a href="{{$item->github}}" target="blank"><i class="bi bi-github"></i></a>
                    <a href="{{$item->facebook}}"target="blank"><i class="bi bi-facebook"></i></a>
                    <a href="{{$item->instagram}}"target="blank"><i class="bi bi-instagram"></i></a>
                    <a href="{{$item->linkedin}}"target="blank"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>{{$item->name}}</h4>
                  <span>{{$item->designation}}</span>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
              
            </div>
            @endforeach
  
            
  
         
  
        </div>
      </section><!-- End Team Section -->

  @endsection