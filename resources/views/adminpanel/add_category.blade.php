@extends('adminpanel.adminmaster')
@section('content')

<main id="main" class="main">
<section class="section">
<div class="row">
<!-- <div class="col-lg-6"></div> -->
<!-- <div class="col-lg-6"> -->
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Categories</h5>

              <!-- Floating Labels Form -->
              @if(Session::get('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>
              @endif
              <form class="row g-3" method="POST" action="{{url('insertcat')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="category" value="{{old('category')}}" id="floatingName" placeholder="Add category">
                   
                    <h6 style="color: red">@error('category')
                        {{$message}}
                  @enderror</h6>
                  </div>
                </div>
                <div class="col-12">
                  <label for="floatingImg">Image</label>
                <div class="form-float1ing">
                <input type="file" class="form-control"  name="cat_img" id="floatingImg" placeholder="Name">
                <h6 style="color: red">@error('cat_img'){{$message}} @enderror</h6>
                </div> 
              </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>

                
              </form><!-- End floating Labels Form -->

            </div>
          </div>
          </div>

<div class="row">
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Categories</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Categories</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($category as $item)
                  <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->category}}</td>
                    <td><img src="{{ asset('upload/category/'.$item->cat_img)}}" class="rounded" width="30%" height="30" alt=""></td>
                    <td>
                        <a href="{{url('editproduct/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="{{url('deleteproduct/'.$item->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete category ?')">Delete</a>
                        
                    </td>
                </tr>
                @endforeach

                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
</div>
</div>


</section>
</main>

@endsection