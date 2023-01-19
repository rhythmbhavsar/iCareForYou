@extends('customerpanel.master')
@section('content')



<section id="hero" class="d-flex flex-column justify-content-end align-items-center" >
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">             
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
        
          </section>
      </div>
      
      <!-- product section -->
      <section class="product_section layout_padding" style="height: 100vh;">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>Categories</span>
               </h2>
            </div>
            <div class="row">
               @foreach ($category as $item)
               <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('c_product/'.$item->id)}}" class="option1">
                           View Products
                           </a>
                           <!-- <a href="" class="option2">
                           Buy Now
                           </a> -->
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="{{ asset('upload/category/'.$item->cat_img)}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{ $item->category}}
                        </h5>
                     </div>
                  </div>
               </div>
               
               @endforeach

            </div>

            <!-- <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div> -->
         </div>
      </section>
      <!-- end product section -->


@endsection