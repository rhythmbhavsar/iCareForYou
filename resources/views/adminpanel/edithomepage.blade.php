@extends('adminpanel.adminmaster')
@section('content')

<main id="main" class="main">
<section class="section">
<div class="row">
<!-- <div class="col-lg-6"></div> -->
<!-- <div class="col-lg-6"> -->
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Slider Data</h5>

              <!-- Floating Labels Form -->
              @if(Session::get('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>
              @endif
              <form class="row g-3" method="POST" action="{{url('/updatehomepage/'.$slide->id)}}" enctype="multipart/form-data">
                @csrf

                <div class="col-md-12">
                    <label for="floatingImg">Title</label>
                  <div class="form">
                    <input type="text" class="form-control" name="title" value="{{$slide->title}}" id="floatingName" >
                   
                    <h6 style="color: red">@error('title')
                        {{$message}}
                  @enderror</h6>
                  </div>

                </div>
                <div class="col-md-12">
                    <label for="floatingImg">Description</label>
                    <div class="form">
                      <input type="text" class="form-control" name="description" value="{{$slide->description}}" id="floatingName">
                     
                      <h6 style="color: red">@error('description')
                          {{$message}}
                    @enderror</h6>
                    </div>
                </div>

                  
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Edit</button>
                  <a href="/edit_homepage"  class="btn btn-secondary">Cancel</a>
                </div>

                
              </form><!-- End floating Labels Form -->

            </div>
          </div>
        

</section>
</main>

@endsection