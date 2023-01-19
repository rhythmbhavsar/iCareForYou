@extends('userpanel.master')
@section('content')

<section id="services" class="services section">
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
                 

                 <img class="rounded float-left" src="{{asset('upload/product/'.$product_detail->pro_img)}}"  alt="..." height="100%" width="80%">

              </div>
              <div class="col-md-6">
                 <div class="_product-detail-content">
                    <p class="_p-name"> {{$product_detail->pro_name}} </p>
                    <div class="_p-price-box">
                       <div class="p-list">
                          <!-- <span> M.R.P. : <i class="fa fa-inr"></i> <del> 1399  </del>   </span> -->
                          <span class="price"> Rs. {{$product_detail->price}}</span>
                       </div>
                       <div class="_p-add-cart">
                          <div class="_p-qty">
                             <span>Add Quantity</span>
                             <!-- <div class="value-button decrease_" id="" value="Decrease Value">-</div> -->
                             <input type="number" name="qty" id="number" min="1" value="1" />
                             <!-- <div class="value-button increase_" id="" value="Increase Value">+</div> -->
                          </div>
                       </div>
                       <div class="_p-features">
                          <span> Description About this product:- </span>
                          {{$product_detail->description}}                     
                       </div>
                       <form action="" method="post" accept-charset="utf-8">
                          <ul class="spe_ul"></ul>
                          <div class="_p-qty-and-cart">
                             <div class="_p-add-cart">
                                
                                <a href="/login" class="btn-theme btn btn-success" tabindex="0">
                                <i class="fa fa-shopping-cart"></i> Login
                                </a>
                                <input type="hidden" name="pid" value="18" />
                                <input type="hidden" name="price" value="850" />
                                <input type="hidden" name="url" value="" />    
                             </div>
                          </div>
                       </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
      </section>

        {{-- ------------------ Reviews --------------------------}}
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
                           {{ $item->name}}
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

    


@endsection