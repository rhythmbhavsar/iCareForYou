@extends('adminpanel.adminmaster')
@section('content')

<main id="main" class="main">
<section class="section">
<div class="row">
<!-- <div class="col-lg-6"></div> -->
<!-- <div class="col-lg-6"> -->
<div class="card">
            <div class="card-body">
              @if(Session::get('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>
              @endif
              <h5 class="card-title">Add Products</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" action="{{url('/updatepro/'.$product->id)}}" method="post" enctype="multipart/form-data">

                @csrf
           
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="name" value="{{$product->pro_name}}" id="floatingName" placeholder="Name">
                    <label for="floatingName">Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="number" class="form-control" name="price" min="1" value="{{$product->price}}" id="floatingEmail" placeholder="Price">
                    <label for="floatingEmail">Price</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                  <select class="form-select" id="floatingSelect" value="{{$product->category}}" name="category" aria-label="Category">

                    @foreach ($category as $item)
                    <option value="{{ $item->id}}">{{ $item->category}}</option>
                @endforeach

                      {{-- <option selected>New York</option> --}}
                      {{-- <option value="1">{{ $item->category}}</option> --}}
                      {{-- <option value="2">DC</option> --}}
                    </select>
                    <label for="floatingSelect">Category</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" placeholder="Description" value="{{$product->description}}" id="floatingTextarea" name="description" style="height: 100px;">
                    <label for="floatingTextarea">Description</label>
                  </div>
                </div>
                
                <div class="col-12">
                    <label for="floatingImg">Image</label>
                  <div class="form-float1ing">
                  <input type="file" class="form-control" value="{{$product->pro_img}}" id="floatingImg" name="pro_img" placeholder="Name">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Edit</button>
                  <a href="/add_product" type="reset" class="btn btn-secondary">Cancel</a>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>
          </div>
          <!-- </div> -->
       
          </section>
</main>

@endsection