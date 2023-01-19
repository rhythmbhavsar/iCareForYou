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
              <form class="row g-3" method="POST" action="{{url('/insertslide')}}" enctype="multipart/form-data">
                @csrf

                <div class="col-md-12">
                    <label for="floatingImg">Title</label>
                  <div class="form">
                    <input type="text" class="form-control" name="title" value="{{old('title')}}" id="floatingName" >
                   
                    <h6 style="color: red">@error('title')
                        {{$message}}
                  @enderror</h6>
                  </div>

                </div>
                <div class="col-md-12">
                    <label for="floatingImg">Description</label>
                    <div class="form">
                      <textarea type="text" class="form-control" name="description" value="{{old('description')}}" id="floatingName"></textarea>
                     
                      <h6 style="color: red">@error('description')
                          {{$message}}
                    @enderror</h6>
                    </div>
                </div>

                  
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>

                
              </form><!-- End floating Labels Form -->

            </div>
          </div>
        
<div class="row">
  <div class="card">
              <div class="card-body">
                <h5 class="card-title">Slider</h5>
  
                <!-- Table with stripped rows -->
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Description</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($slide as $item)
                        
                   
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->title}}</td>
              <td>{{$item->description}}</td>
              <td><a href="{{url('/edithomepage/'.$item->id)}}" class="btn btn-info">Edit</a></td>
              <td><a href="{{url('/deleteslide/'.$item->id)}}" onclick="return confirm('Are you sure you want to delete Sliderdata ?')"class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
  
              </div>
  </div>
</section>
</main>

@endsection