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
              <form class="row g-3" action="{{url('/insertpro')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="name" value="{{old('name')}}" id="floatingName" placeholder="Name">

                    <h6 style="color: red">@error('name')
                        {{$message}}
                  @enderror</h6>
                    <label for="floatingName">Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="number" class="form-control" name="price" min="1" value="{{old('price')}}" id="floatingEmail" placeholder="Price">
                    <h6 style="color: red">@error('price')
                        {{$message}}
                  @enderror</h6>
                    <label for="floatingEmail">Price</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                  <select class="form-select" id="floatingSelect" name="category" aria-label="Category">

                    @foreach ($category as $item)
                    <option value="{{ $item->id}}">{{ $item->category}}</option>
                @endforeach

                      {{-- <option selected>New York</option> --}}
                      {{-- <option value="1">{{ $item->category}}</option> --}}
                      {{-- <option value="2">DC</option> --}}
                    </select>
                    <h6 style="color: red">@error('category')
                        {{$message}}
                  @enderror</h6>
                    <label for="floatingSelect">Category</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Description"  id="floatingTextarea" name="description" style="height: 100px;"></textarea>
                   
                   <h6 style="color: red">@error('description')
                        {{$message}}
                  @enderror</h6> <label for="floatingTextarea">Description</label>
                  </div>
                </div>
                
                <div class="col-12">
                    <label for="floatingImg">Image</label>
                  <div class="form-float1ing">
                  <input type="file" class="form-control" id="floatingImg" name="pro_img" placeholder="Name">
                  <h6 style="color: red">@error('pro_img')
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
          <!-- </div> -->
          <div class="row">
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Products</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($product as $item)
                  <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->pro_name}}</td>
                    <td>Rs. {{ $item->price}}</td>
                    <td>{{ $item->product->category}}</td>
                    <td>{{ $item->description}}</td>
                    <td><img src="{{ asset('upload/product/'.$item->pro_img)}}" class="rounded" width="30%" height="30" alt=""></td>
                    <td>
                      @if ($item->status==0)
                         <button class="btn btn-info btn-sm">Deactive</button> 
                      @elseif($item->status==1)
                      <button class="btn btn-success btn-sm">Active</button> 
                      @endif
                    </td>
                    <td>
                        <a href="{{url('edit_product/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="{{url('delete_product/'.$item->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete product ?')">Delete</a>
                        
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