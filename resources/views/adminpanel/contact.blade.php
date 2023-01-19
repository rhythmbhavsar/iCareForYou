@extends('adminpanel.adminmaster')
@section('content')

<main id="main" class="main">
<section class="section">


<div class="row">
<div class="card">
            <div class="card-body">
              @if(Session::get('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>
              @endif
              <h5 class="card-title">All Contact Data</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr> --}}
                  @foreach ($contact as $item)
                  <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->email}}</td>
                    <td>{{ $item->subject}}</td>
                    <td>{{ $item->message}}</td>
                    <td><a href="{{url('deletecontact/'.$item->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete contact data?')">Delete</a></td>
               
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