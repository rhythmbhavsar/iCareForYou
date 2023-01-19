@extends('labpanel.labmaster')
@section('content')

<main id="main" class="main">
<section class="section">
<div class="row">
<!-- <div class="col-lg-6"></div> -->
<!-- <div class="col-lg-6"> -->
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Address</h5>

              <!-- Floating Labels Form -->
              @if(Session::get('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>
              @endif
              <form class="row g-3" method="POST" action="{{url('insrtadd')}}" enctype="multipart/form-data">
                @csrf
                
                <div class="col-12">
                  <label for="floatingImg">Address</label>
                  <div class="form-floating">
                    <input type="text" class="form-control" name="address" value="{{old('address')}}" id="floatingName" placeholder="Add category">
                   
                    <h6 style="color: red">@error('address')
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
          </div>

<div class="row">
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Address</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Address</th>
                    {{-- <th scope="col">Image</th> --}}
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($address as $item)
                  <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->address}}</td>
                    <td>
                        <a href="{{url('/editadd/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="{{url('/deleteadd/'.$item->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete category ?')">Delete</a>
                        
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