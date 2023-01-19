@extends('adminpanel.adminmaster')
@section('content')

<main id="main" class="main">
<section class="section">

          <!-- </div> -->
          <div class="row">
<div class="card">
            <div class="card-body">
              @if(Session::get('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>
              @endif
              <h5 class="card-title">Products Review</h5>

              <!-- Table with stripped rows -->
              <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th scope="col">Product</th>
                    <th scope="col">Image</th>
                  
                   
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($review as $item)
                  <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->email}}</td>
                    <td>{{ $item->message}}</td>
                    <td>{{ $item->pro_name}}</td>
                    <td><img src="{{asset('upload/product_review/'.$item->pro_review_img)}}" class="rounded" width="100%" height="80" alt="no image"></td>
                    <td>
                        <a href="{{url('deleteproductreview/'.$item->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete product ?')">Delete</a>
                        
                    </td>
                </tr>
                @endforeach
                  

                </tbody>
              </table>
              </div>
              <!-- End Table with stripped rows -->

            </div>
</div>
            </div>
          </section>
</main>

@endsection