@extends('adminpanel.adminmaster')
@section('content')

<main id="main" class="main">
<section class="section">
<div class="row">
<!-- <div class="col-lg-6"></div> -->
<!-- <div class="col-lg-6"> -->
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Team Member</h5>

              <!-- Floating Labels Form -->
              @if(Session::get('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>
              @endif
              <form class="row g-3" method="POST" action="{{url('insertmem')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <label for="floatingImg">Image</label>
                  <div class="form-float1ing">
                  <input type="file" class="form-control"  name="member_img" id="floatingImg" >
                  <h6 style="color: red">@error('member_img'){{$message}} @enderror</h6>
                  </div> 
                </div>
                <div class="col-md-12">
                    <label for="floatingImg">Name</label>
                  <div class="form">
                    <input type="text" class="form-control" name="name" value="{{old('name')}}" id="floatingName" >
                   
                    <h6 style="color: red">@error('name')
                        {{$message}}
                  @enderror</h6>
                  </div>
                </div>
                <div class="col-md-12">
                    <label for="floatingImg">Detail</label>
                    <div class="form">
                      <textarea type="text" class="form-control" name="detail" value="{{old('detail')}}" id="floatingName"></textarea>
                     
                      <h6 style="color: red">@error('detail')
                          {{$message}}
                    @enderror</h6>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="floatingImg">Designation</label>
                    <div class="form">
                      <input type="text" class="form-control" name="designation" value="{{old('designation')}}" id="floatingName">
                     
                      <h6 style="color: red">@error('designation')
                          {{$message}}
                    @enderror</h6>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="floatingImg">Github link</label>
                    <div class="form">
                      <input type="text" class="form-control" name="github" value="{{old('github')}}" id="floatingName" >
                     
                      <h6 style="color: red">@error('github')
                          {{$message}}
                    @enderror</h6>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="floatingImg">Facebook link</label>
                    <div class="form">
                      <input type="text" class="form-control" name="facebook" value="{{old('facebook')}}" id="floatingName" >
                     
                      <h6 style="color: red">@error('facebook')
                          {{$message}}
                    @enderror</h6>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="floatingImg">Instagram Link</label>
                    <div class="form">
                      <input type="text" class="form-control" name="instagram" value="{{old('instagram')}}" id="floatingName" >
                     
                      <h6 style="color: red">@error('instagram')
                          {{$message}}
                    @enderror</h6>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="floatingImg">LinkedIn Link</label>
                    <div class="form">
                      <input type="text" class="form-control" name="linkedin" value="{{old('linkedin')}}" id="floatingName" >
                     
                      <h6 style="color: red">@error('linkedin')
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
                          <h5 class="card-title">Team Member</h5>
            <div class="table-responsive">
                          <!-- Table with stripped rows -->
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Github</th>
                                <th scope="col">Facebook</th>
                                <th scope="col">Instagram</th>
                                <th scope="col">LinkedIn</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Edit</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($member as $item)
                              <tr>
                                <td>{{ $item->id}}</td>
                                <td scope="col"><img src="{{ asset('upload/teammember/'.$item->member_img)}}"  class="rounded w3-round" alt="No Image" height="200%" width="100%"></td>
                                <td scope="col">{{ $item->name}}</td>
                                <td>{{ $item->detail}}</td>
                                <td>{{ $item->designation}}</td>
                                <td>{{ $item->github}}</td>
                                <td>{{ $item->facebook}}</td>
                                <td>{{ $item->instagram}}</td>
                                <td>{{ $item->linkedin}}</td>
                               {{-- <td>
                                    <a href="{{url('edit_product/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                </td> --}}
                                <td>
                                    <a href="{{url('/deletemember/'. $item->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete team member ?')">Delete</a>
                                    
                                </td>
                                <td>
                                  <a href="{{url('/editmember/'. $item->id)}}" class="btn btn-info btn-sm" >Edit</a>
                                  
                              </td>
                            </tr>
                            @endforeach
                              
            
                            </tbody>
                          </table>
                          <!-- End Table with stripped rows -->
                        </div>
                        </div>
            </div>
                        </div>

</section>
</main>

@endsection