<?php

use App\Http\Controllers\ProductController;

$total = ProductController::cartitem();
?>
@extends('customerpanel.master')
@section('content')
<div class=" container-fluid my-5 ">
    <div class="row justify-content-center ">


        @if (count($cart))
        <div class="col-xl-8">
            <br><br>
            <div class="card shadow-lg ">

                <div class="row justify-content-around">
                    <div class="card border-0 ">
                        <div class="card-header card-2">
                            <p class="card-text text-muted mt-md-4  mb-2 space">YOUR ORDER <span class=" small text-muted ml-2 cursor-pointer">EDIT SHOPPING BAG</span> </p>
                            <hr class="my-2">
                        </div>
                        <div class="card-body pt-0">


                            @php
                            $total = 0;
                            $gst = 0;
                            $count = 0;
                            @endphp

                            @foreach ($cart as $item)
                            @php
                            $c_id = $item->id;
                            @endphp

                            <div class="row  justify-content-between">
                                <div class="col-auto col-md-5">
                                    <div class="media flex-column flex-sm-row">
                                        @php
                                        $product_img = DB::table('product_models')
                                        ->where('id', $item->product_id)
                                        ->value('pro_img');
                                        @endphp
                                        {{-- {{$product_img}} --}}
                                        <img class=" img-fluid" src="{{ asset('upload/product/' . $product_img) }}" style="height: 100px; width: 100px">
                                        <div class="media-body  my-auto">
                                            <div class="row ">
                                                <div class="col-auto">
                                                    <p class="mb-0">
                                                        <b>
                                                            @php
                                                            $product_name = DB::table('product_models')
                                                            ->where('id', $item->product_id)
                                                            ->value('pro_name');
                                                            @endphp
                                                            {{ $product_name }}
                                                        </b>

                                                    </p>

                                                    @php
                                                    $productid = DB::table('product_models')
                                                    ->where('id', $item->product_id)
                                                    ->value('category');
                                                    $CategoryName = DB::table('category_models')
                                                    ->where('id', $productid)
                                                    ->value('category');
                                                    @endphp
                                                    <small class="text-muted">
                                                        {{ $CategoryName }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-5"> --}}

                                <div class=" pl-0 flex-sm-col col-auto  my-auto">
                                    <b>Quantity</b>
                                    <p class="boxed-1">{{ $item->qty }}</p>
                                    <a class="btn btn-warning" href="{{ url('/updateqty/' . $item->id) }}">Update Quantity</a>
                                </div>
                                <div class=" pl-0 flex-sm-col col-auto  my-auto ">
                                    <b>Price</b>
                                    <p class="boxed-1">RS {{ $item->price }} </p>
                                    <a href="/dlt_cart/{{ $item->id }}" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Remove Product</a>
                                </div>
                                <div class=" pl-0 flex-sm-col col-auto  my-auto ">
                                    <b>Sub Total</b>
                                    <p class="boxed-1">
                                        @php
                                        $eval = $item->qty . '*' . $item->price;
                                        $p = eval('return ' . $eval . ';');
                                        $count = $count + $p;
                                        $gst = ($count * 18) / 100;
                                        $total = $count + $gst;
                                        @endphp

                                        RS {{ $p }}
                                    </p>
                                </div>
                                {{-- </div> --}}
                                <hr class="my-2">
                                @endforeach

                                <div class="row  justify-content-between">
                                    <div class="col-auto col-md-5">
                                        <a href="/c_category" class="btn btn-primary">Continue Shopping</a>
                                    </div>
                                    <div class=" pl-0 flex-sm-col col-auto  my-auto">

                                    </div>
                                    <div class=" pl-0 flex-sm-col col-auto  my-auto ">

                                    </div>
                                    <div class=" pl-0 flex-sm-col col-auto  my-auto ">
                                        <span><b> Product Price : </b> RS. {{ $count }}</span><br>
                                        <span><b> GST(18%) : </b> RS. {{ $gst }}</span><br>
                                        <span><b> Total Price : </b> RS. {{ $total }}</span><br>
                                        {{-- <a href="/checkout" class="btn btn-primary">Checkout</a> --}}
                                        </p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <br><br>
            <div class="card shadow-lg ">


                <div class="row justify-content-around">

                    <div class="col-md-10">
                        <div class="card border-0 ">
                            <br><br>
                            <div class="card-body pt-0">

                                <h2 class="mb-3">Billing address</h2>
                                <form class="needs-validation" method="POST" action="{{ url('/checkoutinsert') }}" novalidate>
                                    @csrf
                                    <div class="row">
                                        <div class=" mb-3">
                                            <label for="firstName">User name</label>
                                            <input type="text" class="form-control" id="firstName" name="custname" placeholder="" value="" required>
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
                                        <input type="email" class="form-control" id="email" name="custemail" placeholder="you@example.com" required>
                                        <div class="invalid-feedback">
                                            Please enter a valid email address for shipping updates.
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                                        <div class="invalid-feedback">
                                            Please enter your shipping address.
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5 mb-3">
                                            <label for="country">Pincode</label>
                                            <select class="form-control" name="pincode" id="country" required>
                                                @foreach ($drop as $item)
                                                <option value="{{ $item->id }}">{{ $item->pincode }}</option>
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

                                            <div class="mb-3">
                                                <label for="address">Total</label>
                                                <input type="text" class="form-control" name="total" value="{{ $total }}" readonly>
                                                <div class="invalid-feedback">
                                                    Please enter your shipping address.
                                                </div>
                                            </div>

                                            {{-- <label for="address">billno</label> --}}
                                            <input type="text" class="form-control" id="address" value="0" name="billno" hidden>



                                            <label for="address">Order Date</label>
                                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="orderdate" value="<?php echo date('d-m-Y'); ?>" readonly>

                                            <hr class="mb-4">
                                            <button class="btn btn-primary btn-lg " type="submit">Continue to
                                                checkout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        @else

        <div class="container-fluid  mt-100">
            <div class="row">

                <div class="col-md-12"><br><br>

                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body cart">
                            <div class="col-sm-12 empty-cart-cls text-center">
                                <img src="https://static.vecteezy.com/system/resources/previews/004/999/463/original/shopping-cart-icon-illustration-free-vector.jpg" width="330" height="330" class="img-fluid mb-4 mr-3">
                                <h3><strong>Your Cart is Empty</strong></h3>
                                <h4>Add something to make me happy :)</h4>
                                <a href="/c_category" class="btn btn-primary cart-btn-transform m-3" data-abc="true">continue shopping</a>


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
@endsection