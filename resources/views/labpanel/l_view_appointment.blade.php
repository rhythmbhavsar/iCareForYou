@extends('labpanel.labmaster')
@section('content')


<main id="main" class="main">
  <section class="section">


    <div class="row">
      <div class="card"><br>
        <div class="card-body">
          @if(Session::get('status'))
          <div class="alert alert-success">
            {{Session::get('status')}}
          </div>
          @endif
          <h5 class="card-title">Appointments</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Lab Address</th>
                <th scope="col">Test Type</th>
                <th scope="col">Date</th>
                <th scope="col">Time slot</th>
                <th scope="col">Status</th>
                <th scope="col">Cancel</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($appo as $item)

              <tr>
                <th scope="row"></th>
                <td>{{ $item->name}}</td>
                <td>{{ $item->address}}</td>
                <td>{{ $item->t_type}}</td>
                <td>{{ $item->date}}</td>
                <td>{{ $item->time_slot}}</td>
                <td>

                  @if($item->result_status==1)
                  <button class="btn btn-success btn-sm">Result Generated</button>
                  @elseif($item->status==1)
                  <button class="btn btn-warning btn-sm">Accepted</button>
                  @elseif($item->status==2)
                  <button class="btn btn-secondary btn-sm">Appointment Cancelled</button>
                  @elseif ($item->status==0)

                  <form action="{{url('/l_update_appo_status/'.$item->id)}}" method="POST">
                    @csrf
                    <input type="number" name="accept" value="1" hidden>
                    <button class="btn btn-info btn-sm" onclick="return confirm('Do you want to accept appointment ?')">Accept request</button>
                  </form>
                  @endif
                </td>
                <td>
                  @if ($item->cancel_status==0)

                  <button class="btn btn-secondary btn-sm">Not Cancelled</button>

                  @elseif($item->cancel_status==1)
                  <button class="btn btn-danger btn-sm">Cancelled</button>
                  @endif
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