@extends('userpanel.master')
@section('content')

<div class="container mt-5 mb-5">
   <div class="d-flex justify-content-center row">
      <div class="col-md-10">
         <br><br>

         @if(count($product))

         @foreach ($product as $item)

         <div class="row p-2 bg-white border rounded mt-2">
            <div class="col-md-3 mt-1"><img class="img-fluida img-responsive rounded product-image" src="{{asset('upload/product/'.$item->pro_img)}}" height="200px" width="200px"></div>
            <div class="col-md-6 mt-1">
               <h5>{{ $item->pro_name}}</h5>

               <p class="text-justify text-truncate para mb-0">{{ $item->description}}<br><br></p>
            </div>
            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
               <div class="d-flex flex-row align-items-center">
                  <h4 class="mr-1">Rs. {{ $item->price}}</h4>
               </div>
               <h6 class="text-success">Free shipping</h6>
               <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button"><a href="{{url('/product_detail/'.$item->id)}}" class="link-light">Details</a></button><button class="btn btn-outline-primary btn-sm mt-2" type="button"><a href="/login"> Log In to add to cart</a></button></div>
            </div>
         </div>


         @endforeach

         @else

         <div class="container-fluid  mt-100">
            <div class="row">

               <div class="col-md-12">

                  <div class="card">
                     <div class="card-header">
                     </div>
                     <div class="card-body cart">
                        <div class="col-sm-12 empty-cart-cls text-center">
                           <img src="https://tradebharat.in/assets/catalogue/img/no-product-found.png" width="830" height="730" class="img-fluid mb-4 mr-3">

                           <a href="/category" class="btn btn-danger cart-btn-transform m-3" data-abc="true">Back to Category</a>


                        </div>
                     </div>
                  </div>


               </div>

            </div>

         </div>

         @endif


      </div>
   </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

@endsection