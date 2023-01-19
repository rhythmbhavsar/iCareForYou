@extends('customerpanel.master')
@section('content')

<section style="background-color: #eee; height: 100vh;">
  <div class="container py-5" >
    <!-- <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div> -->
    <center><h1>Profile</h1></center>

    @foreach ($profile as $item)
        
   
    <div class="row">
      @if(Session::get('status'))
      <div class="alert alert-success">
        {{Session::get('status')}}
      </div>
      @endif
      <div class="col-lg-4">
       
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="{{asset('upload/user/'.$item->user_img)}}" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;"><br>
             
            <h3 class="my-3">{{$item->name}}</h3>
            <p class="text-muted mb-1">{{$item->email}}</p>
          
          </div>
        </div>

      
      </div>

      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$item->name}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$item->email}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$item->mobile}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$item->address}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-9">
                <p class="mb-0"></p>
              </div>
              <div class="col-sm-3">
               <a href="/edit_profile/{{$item->id}}" class="btn btn-primary">Edit</a>
              </div>
            </div>
           
      </div>
    </div>
    @endforeach
  </div>
</section>

@endsection