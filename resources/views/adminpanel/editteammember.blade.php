@extends('adminpanel.adminmaster')
@section('content')

<main id="main" class="main">
<section class="section">
<div class="row">
<!-- <div class="col-lg-6"></div> -->
<!-- <div class="col-lg-6"> -->
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Team Member</h5>

              <!-- Floating Labels Form -->
              @if(Session::get('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>
              @endif
              <form class="row g-3" method="POST" action="{{url('edit_member/'.$member->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <label for="floatingImg">Image</label>
                  <div class="form-float1ing">
                  <input type="file" class="form-control" value="{{$member->member_img}}"  name="member_img" id="floatingImg" >
                  <h6 style="color: red">@error('member_img'){{$message}} @enderror</h6>
                  </div> 
                </div>
                <div class="col-md-12">
                    <label for="floatingImg">Name</label>
                  <div class="form">
                    <input type="text" class="form-control" name="name" value="{{$member->name}}" id="floatingName" >
                   
                    <h6 style="color: red">@error('name')
                        {{$message}}
                  @enderror</h6>
                  </div>
                </div>
                <div class="col-md-12">
                    <label for="floatingImg">Detail</label>
                    <div class="form">
                      <input type="text" class="form-control" name="detail" value="{{$member->detail}}" id="floatingName">
                     
                      <h6 style="color: red">@error('detail')
                          {{$message}}
                    @enderror</h6>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="floatingImg">Designation</label>
                    <div class="form">
                      <input type="text" class="form-control" name="designation" value="{{$member->designation}}" id="floatingName">
                     
                      <h6 style="color: red">@error('designation')
                          {{$message}}
                    @enderror</h6>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="floatingImg">Github link</label>
                    <div class="form">
                      <input type="text" class="form-control" name="github" value="{{$member->github}}" id="floatingName" >
                     
                      <h6 style="color: red">@error('github')
                          {{$message}}
                    @enderror</h6>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="floatingImg">Facebook link</label>
                    <div class="form">
                      <input type="text" class="form-control" name="facebook" value="{{$member->facebook}}" id="floatingName" >
                     
                      <h6 style="color: red">@error('facebook')
                          {{$message}}
                    @enderror</h6>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="floatingImg">Instagram Link</label>
                    <div class="form">
                      <input type="text" class="form-control" name="instagram" value="{{$member->instagram}}" id="floatingName" >
                     
                      <h6 style="color: red">@error('instagram')
                          {{$message}}
                    @enderror</h6>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="floatingImg">LinkedIn Link</label>
                    <div class="form">
                      <input type="text" class="form-control" name="linkedin" value="{{$member->linkedin}}" id="floatingName" >
                     
                      <h6 style="color: red">@error('linkedin')
                          {{$message}}
                    @enderror</h6>
                    </div>
                  </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Edit</button>
                  <a href="/teammember" class="btn btn-secondary">Cancel</a>
                </div>

                
              </form><!-- End floating Labels Form -->

            </div>
</div>
</div>
</section>
</main>

@endsection