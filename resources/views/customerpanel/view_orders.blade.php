@extends('customerpanel.master')

@section('content')




<div class="container mt-5 mb-5">
  <div class="d-flex justify-content-center row">
    <div class="col-md-10">

      <div class="heading_container heading_center">
        <br><br>
        <h2>
          Your <span>Orders</span>
        </h2>
      </div>

      <div class="row">
        @if(count($prod))
        <div class="card">
          <div class="card-body">
            {{-- <h5 class="card-title">Categories</h5> --}}

            <!-- Table with stripped rows -->
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Customer Name</th>
                  <th scope="col">Mobile number</th>
                  <th scope="col">Customer Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">Pincode</th>
                  <th scope="col">Shipping Type</th>
                  <th scope="col">Total</th>
                  <th scope="col">Order Date</th>
                  <th scope="col">View Product</th>
                  <th scope="col">Bill</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($prod as $item)

                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->custname}}</td>
                  <td>{{$item->mobile}}</td>
                  <td>{{$item->custemail}}</td>
                  <td>{{$item->address}}</td>
                  <td>{{$item->pincode}}</td>
                  <td>{{$item->shippingtype}}</td>
                  <td>{{$item->total}}</td>
                  <td>{{$item->orderdate}}</td>
                  <td><a href="{{url('/order_detail/'.$item->id)}}" class="btn btn-primary btn-sm">View Product</a></td>
                  <td><a href="{{url('/bill/'.$item->id)}}" class="btn btn-danger btn-sm">View Bill</a></td>
                </tr>
                @endforeach

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
      @else

      <div class="container-fluid  mt-100">
        <div class="row">

          <div class="col-md-12">

            <div class="card">
              <div class="card-header">
              </div>
              <div class="card-body cart">
                <div class="col-sm-12 empty-cart-cls text-center">
                  <img src="https://lgc-ecommerce.s3.ap-south-1.amazonaws.com/assets/images/section/misc/no-cart-product.png" width="130" height="130" class="img-fluid mb-4 mr-3"><br>
                  <h3><strong>You have no Orders</strong></h3>
                  <h4>Continue your shopping</h4>
                  <a href="/c_category" class="btn btn-primary cart-btn-transform m-3" data-abc="true">Continue Shopping</a>


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
</div>


<br><br>
<!-- </main>End #main -->


@endsection