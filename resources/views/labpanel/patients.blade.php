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
          <h5 class="card-title">Patients</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Test Type</th>
                <th scope="col">Date</th>
                <th scope="col">Time slot</th>
                <th scope="col">Result</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($appo as $item)

              <tr>
                <th scope="row">{{ $item->id}}</th>
                <td>{{ $item->name}}</td>
                <td>{{ $item->t_type}}</td>
                <td>{{ $item->date}}</td>
                <td>{{ $item->time_slot}}</td>
                <!-- <td><a href="{{url('/submit_result/'.$item->id)}}" class="btn btn-primary">Predict Result</a></td> -->
              
                <td>
                    @if ($item->result_status==0)
                    
                    <a href="{{url('/submit_result/'.$item->id)}}" class="btn btn-primary">Predict Result</a> 
                   
                    @elseif($item->result_status==1)
                    <button class="btn btn-success btn-sm">Result Generated</button> 
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