@extends('adminpanel.adminmaster')
@section('content')

<main id="main" class="main">
    <section class="section">
        <div class="float-right">
            <a href="/lab_register" class="btn btn-primary float-left">Add User</a>
        </div><br>

<div class="row">
<div class="card">
            <div class="card-body">
                @if(Session::get('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>
              @endif
              <h5 class="card-title">Lab Assistant Users</h5>
              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Lab ID Code</th>
                    <th scope="col">Password</th>
                    <th scope="col">Status</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($lab_users as $item)
                  <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->email}}</td>
                    <td>{{ $item->mobile}}</td>
                    <td>{{ $item->lab_code}}</td>
                    <td>{{ $item->password}}</td>
                    <td>
                      @if ($item->status==0)
                         <button class="btn btn-info btn-sm">Deactive</button> 
                      @elseif($item->status==1)
                      <button class="btn btn-success btn-sm">Active</button> 
                      @endif
                    </td>
                    <td><a href="{{url('deletelab/'.$item->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete account?')">Delete</a></td>
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