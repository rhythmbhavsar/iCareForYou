@extends('adminpanel.adminmaster')
@section('content')

<main id="main" class="main">
<section class="section">
<div class="row">
<!-- <div class="col-lg-6"></div> -->
<!-- <div class="col-lg-6"> -->
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Categories</h5>

              <!-- Floating Labels Form -->
              @if(Session::get('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>
              @endif
              <form class="row g-3" method="POST" action="{{url('updatecat/'.$category->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="category" value="{{$category->category}}" id="floatingName" placeholder="Add category">
                   
                    <h4 style="color: red">@error('category')
                        {{$message}}
                  @enderror</h4>
                  </div>
                </div>
                <div class="col-12">
                  <label for="floatingImg">Image</label>
                <div class="form-float1ing">
                <input type="file" class="form-control" name="cat_img" {{$category->cat_img}} id="floatingImg" placeholder="Name">
                </div> 
              </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Edit</button>
                  <a href="/add_category" type="reset" class="btn btn-secondary">Cancel</a>
                </div>

                
              </form><!-- End floating Labels Form -->

            </div>
          </div>
          </div>

</section>
</main>

  @endsection