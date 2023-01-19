@extends('userpanel.master');

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
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center">Enter your personal details to create account</p>
                  </div>

                  <form action="{{url('insertdata')}}" class="row g-3 needs-validation" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">User Image</label>
                      <input type="file" name="user_img" class="form-control"  value="https://cdn-icons-png.flaticon.com/512/149/149071.png"required>
                      <h6 style="color: red">@error('user_img'){{$message}} @enderror</h6>
                    
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control"  required>
                      <h6 style="color: red">@error('name'){{$message}} @enderror</h6>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" value="{{old('email')}}" id="yourEmail" required>
                      <h6 style="color: red">@error('email'){{$message}} @enderror</h6>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Mobile number</label>
                      <input type="number" name="mobile" class="form-control" max="9999999999" min="0" value="{{old('mobile')}}"id="yourUsername" required>
                      <div class="input-group has-validation">
                        <h6 style="color: red">@error('mobile'){{$message}} @enderror</h6>
                      </div>
                    </div>
                   

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Address</label>
                      <input type="text" name="address" class="form-control" value="{{old('address')}}"id="yourUsername" required>
                      <div class="input-group has-validation">
                        <h6 style="color: red">@error('mobile'){{$message}} @enderror</h6>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <h6 style="color: red">@error('password'){{$message}} @enderror</h6>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                   

                   
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <h4><p class=" mb-0">Already have an account? <a href="/login">Log in</a></p></h4>
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