@extends('customerpanel.master')
@section('content')

<section id="services" class="services section-b0g">
        <div class="container-fluid">
          <!-- <div class="col-sm-12 text-center mb-4">
            <a class="btn btn-primary" target="_blank" href="http://paypal.me/skd1996"> Donate Now <i class="fa fa-dollar"></i></a>
          </div> -->
          <br><br>
           <div class="row row-sm">
              <div class="col-md-6 _boxzoom">

                 <!-- <div class="zoom-thumb">
                    <ul class="piclist">
                       <li><img src="https://s.fotorama.io/1.jpg" alt=""></li>
                       <li><img src="https://s.fotorama.io/2.jpg" alt=""></li>
                       <li><img src="https://s.fotorama.io/3.jpg" alt=""></li>
                       <li><img src="https://ucarecdn.com/382a5139-6712-4418-b25e-cc8ba69ab07f/-/stretch/off/-/resize/760x/" alt=""></li>
                    </ul>
                 </div>
                 <div class="_product-images">
                    <div class="picZoomer">
                       <img class="my_img" src="https://s.fotorama.io/1.jpg" alt="">
                    </div>
                 </div> -->

                 <img class="rounded float-left" src="{{asset('upload/product/'.$c_product_detail->pro_img)}}"  alt="..." height="100%" width="80%">

              </div>
              <div class="col-md-6">
                 <div class="_product-detail-content">
                    <p class="_p-name">{{$c_product_detail->name}}</p>
                    <div class="_p-price-box">
                       <div class="p-list">
                          <!-- <span> M.R.P. : <i class="fa fa-inr"></i> <del> 1399  </del>   </span> -->
                          <span class="price"> Rs. {{$c_product_detail->price}} </span>
                       </div>
                       
                       <div class="_p-features">
                          <span> Description About this product:- </span>
                          {{$c_product_detail->description}}                      
                       </div>
                       
                          <ul class="spe_ul"></ul>
                          <div class="_p-qty-and-cart">
                             <div class="_p-add-cart">
                                
                              <form class="row g-3" method="POST" action="{{url('/addtocart')}}" enctype="multipart/form-data">
                              @csrf

                              <div class="_p-add-cart">
                                 <div class="_p-qty">
                                    <span>Add Quantity</span>
                                    <!-- <div class="value-button decrease_" id="" value="Decrease Value">-</div> -->
                                    <input type="number" name="qty" id="number" min="1" value="1" style="width: 20%"/>
                                    <!-- <div class="value-button increase_" id="" value="Increase Value">+</div> -->
                                 </div>
                              </div>
                              <input type="hidden" name="product_id" value="{{$c_product_detail->id}}">
                              {{-- <input type="hidden" name="qty" value="1"> --}}
                              <input type="hidden" name="billno" value="0">
                              <input type="hidden" name="price" value="{{$c_product_detail->price}}">
                              <input type="hidden" name="pstatus" value="cart">
                              <button type="submit" class="btn-theme btn btn-success" href="#" tabindex="0">
                                 <i class="fa fa-shopping-cart"></i> Add to cart
                              </button>
 
                              </form>

                                
                             </div>
                          </div>
                       
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>

     {{-- ----------------------------------Reviews----------------- --}}

     
    
<div class="container mt-5 mb-5">
      <div class="section-title" data-aos="zoom-out">
         <h2>Product Reviews</h2>
         <p>What they are saying about product</p>
       </div>
      <div class="d-flex justify-content-center row">
         <div class="col1-md-10">         
          
            {{-- <h1>{{ $pro_review->pro_id }}</h1> --}}
            {{-- @if($pro_review->pro_id == 0){
               <h1>No Reviews</h1>
            }@else{ --}}
             @foreach ($pro_review as $item)      
  
                 <div class="row p-2 bg-white border rounded mt-2">
                    <div class="col-md-3 mt-1"><img class="img-fluida img-responsive rounded product-image" src="{{asset('upload/product_review/'.$item->pro_review_img)}}" height="200px" width="200px"></div>
                    <div class="col-md-8 mt-1">
                       <h5>
                        {{ $item->pro_name}}
                     </h5>
                       
                       <p class="text-justify  para mb-0">
                        {{ $item->message}}
                        <br><br></p>
                    </div>
                    
                 </div>
                 @endforeach
               {{-- }@endif --}}
  
                 
          </div>
      </div>
  </div>

  {{------------------------------------------- Add Reviews -------------------------------}}

  
  <section id="contact" class="contact mb-5">
   <div class="container" data-aos="fade-up">
   <br><br>
     <div class="row">
       <div class="col-lg-12 text-center mb-5">
         <h1 class="page-title">Add Product Review</h1>
       </div>
     </div>

     

     <div class="form mt-5">
       <form action="{{url('insertpro_rev')}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
         @csrf
         <div class="row">
           <div class="form-group col-md-6">
             <input type="text" name="name" class="form-control" id="name" placeholder="{{Session::get('CustomerLoginId')['name']}}" value="{{Session::get('CustomerLoginId')['name']}}" readonly>
             <h6 style="color: red">@error('user_img'){{$message}} @enderror</h6>
            </div>
           <div class="form-group col-md-6">
             <input type="email" class="form-control" name="email" id="email" placeholder="{{Session::get('CustomerLoginId')['email']}}" value="{{Session::get('CustomerLoginId')['email']}}" readonly>
             <h6 style="color: red">@error('email'){{$message}} @enderror</h6>
            </div>
         </div>
         <div class="form-group">
           <input type="file" class="form-control" name="pro_review_img" id="subject" placeholder="Subject" required>
           <h6 style="color: red">@error('pro_review_img'){{$message}} @enderror</h6>
         </div>
         <div class="form-group">
           <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
           <h6 style="color: red">@error('message'){{$message}} @enderror</h6>
         </div>
         <input type="text" class="form-control" value="{{$c_product_detail->id}} " name="pro_id" hidden>
         <h6 style="color: red">@error('pro_id'){{$message}} @enderror</h6>
         <div class="my-3">
           <div class="loading">Loading</div>
           <div class="error-message"></div>
           <div class="sent-message">Your message has been sent. Thank you!</div>
         </div>
         <div class="text-center"><button type="submit">Send Message</button></div>
       </form>
     </div><!-- End Contact Form -->

   </div>
 </section>

@endsection