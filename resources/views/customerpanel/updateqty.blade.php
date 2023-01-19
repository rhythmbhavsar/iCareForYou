@extends('customerpanel.master')
@section('content')
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Update Quantity</h5>

                                    </div>

                                    <form class="row g-3" method="POST"
                                    action="{{ url('/updatecart/'. $cart->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="_p-add-cart">
                                        <div class="_p-qty"><br>
                                            <span>Quantity</span>
                                            <!-- <div class="value-button decrease_" id="" value="Decrease Value">-</div> -->
                                            <input type="number" name="qty"
                                                id="number" min="1" max="20"
                                                value="{{ $cart->qty }}"
                                                style="width: 20%" />
                                            <!-- <div class="value-button increase_" id="" value="Increase Value">+</div> -->
                                        </div>
                                    </div>
                                    
                                    <input type="text" name="product_id"
                                        value="{{ $cart->id }}" hidden>
                                    <button type="submit" class="btn-theme btn btn-success"
                                        href="#" tabindex="0">
                                        <i class="fa fa-shopping-cart"></i> Update Quantity
                                    </button>
                                    <a class="btn-theme btn btn-danger"
                                    href="/c_cart" tabindex="0">
                                    <i class="fa fa-shopping-cart"></i> Back to cart
                                </a>
                                </form>


                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->
@endsection
