
@extends('customerpanel.master')

@section('content')

  
    


 
  <div class="heading_container heading_center">
    <br><br> <br><br>
    <h2>
       Your <span>Orders</span>
    </h2>
 </div><br><br>
  <div class="row">
    <div class="card">
                <div class="card-body">
                  {{-- <h5 class="card-title">Categories</h5> --}}
    
                  <!-- Table with stripped rows -->
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Bill No</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Sub Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @foreach ($prod as $item)
                          
                      <tr>
                        <th scope="row">{{$item->billno}}</th>
                        <td>
                          @php
                          $product_image = DB::table('product_models')
                              ->where('id', $item->product_id)
                              ->value('pro_img');
                      @endphp
                          <img class=" img-fluid"
                          src="{{ asset('upload/product/' . $product_image) }}"
                          style="height: 100px; width: 100px"></td>
                        <td> 
                          @php
                          $product_name = DB::table('product_models')
                              ->where('id', $item->product_id)
                              ->value('pro_name');
                      @endphp
                          {{$product_name}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->qty}}</td>
                        <td>{{$item->qty*$item->price}}</td>
                      </tr>
                      @endforeach
                     
                    </tbody>
                  </table>
                  <!-- End Table with stripped rows -->
    
                </div>
</div>
</div>

    
  <br><br>
</main><!-- End #main -->

  
@endsection