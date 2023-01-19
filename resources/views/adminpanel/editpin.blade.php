@extends('adminpanel.adminmaster')
@section('content')

<main id="main" class="main">
<section class="section">
<div class="row">
<!-- <div class="col-lg-6"></div> -->
<!-- <div class="col-lg-6"> -->
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Pincodes</h5>

              <!-- Floating Labels Form -->
              @if(Session::get('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>
              @endif
              <form class="row g-3" method="POST" action="{{url('/updatepin/'.$pin->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="pincode" value="{{$pin->pincode}}" id="floatingName" placeholder="Add category">
                   
                    <h6 style="color: red">@error('pincode')
                        {{$message}}
                  @enderror</h6>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Edit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>

                
              </form><!-- End floating Labels Form -->

            </div>
          </div>
          </div>


</section>
</main>

@endsection