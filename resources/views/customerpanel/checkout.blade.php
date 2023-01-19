@extends('customerpanel.master')
@section('content')


<main id="main">
  <section id="contact" class="contact mb-5">
    <div class="container">
       <br>
      <br>

        <div class="row">
         
          <div class="col-md-10">
            
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" novalidate>
              <div class="row">
                <div class=" mb-3">
                  <label for="firstName">User name</label>
                  <input type="text" class="form-control" id="firstName" name="custname"placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                <div class=" mb-3">
                  <label for="lastName">Mobile No.</label>
                  <input type="text" class="form-control" name="mobile" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
              </div>
      
           
              <div class="mb-3">
                <label for="email">Email </label>
                <input type="email" class="form-control" id="email" name="custemail" placeholder="you@example.com">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>
      
              <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address"placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>
      
             
      
              <div class="row">
                <div class="col-md-5 mb-3">
                  <label for="country">Pincode</label>
                  <select class="form-control" name="pincode" id="country" required>
                   @foreach ($drop as $item)
                       

                    <option value="{{$item->id}}">{{$item->pincode}}</option>
                    @endforeach
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>
              <div class="row">
                <div class="col-md-5 mb-3">
                  <label for="country">Shipping Type</label>
                  <select class="form-control" id="country" name="shippingtype" required>
                 
                    <option value="cod">Cash On Delivery</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>
                <label for="address">billno</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="billno"required>

                <label for="address">custid</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="custid"required>

                <label for="address">Total</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="total" readonly>
                
                <label for="address">Order Date</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="orderdate" value="<?php echo date('d-m-Y') ?>" readonly>
             
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg " type="submit">Continue to checkout</button>
            </form>

          </div>
        </div>
  </section>


  

</main><!-- End #main -->


@endsection