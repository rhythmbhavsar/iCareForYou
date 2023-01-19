@extends('customerpanel.master');

@section('content');
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <br>
              <br>

              <div class="card mb-3">
             
                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Edit Account</h5>
                    <p class="text-center ">Enter your personal details to edit account</p>
                  </div>

                  <form action="{{url('edit_profiledata/'.$users->id)}}" class="row g-3 needs-validation" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                      <label for="user_img" class="form-label">User Image</label>
                      <input type="file" name="user_img" class="form-control"  value="{{ asset('upload/user/'.$users->user_img)}}"required>
                      <h6 style="color: red">@error('user_img'){{$message}} @enderror</h6>
                    
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control" value="{{$users->name}}"id="yourName" required>
                      <h6 style="color: red">@error('name'){{$message}} @enderror</h6>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" value="{{$users->email}}" id="yourEmail" required>
                      <h6 style="color: red">@error('email'){{$message}} @enderror</h6>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Mobile number</label>
                      <input type="text" name="mobile" class="form-control" value="{{$users->mobile}}"id="yourUsername" required>
                      <div class="input-group has-validation">
                        <h6 style="color: red">@error('mobile'){{$message}} @enderror</h6>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Address</label>
                      <input type="text" name="address" class="form-control" value="{{$users->address}}"id="yourUsername" required>
                      <div class="input-group has-validation">
                        <h6 style="color: red">@error('mobile'){{$message}} @enderror</h6>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="text" name="password" value="{{$users->password}}" class="form-control" id="yourPassword" required>
                      <h6 style="color: red">@error('password'){{$message}} @enderror</h6>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                   

                   
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Edit Account</button>
                    </div>
                   
                  </form>

                </div>
              </div>

            

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  @endsection