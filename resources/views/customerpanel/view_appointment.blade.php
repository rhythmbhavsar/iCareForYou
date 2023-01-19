@extends('customerpanel.master')
@section('content')


<main id="main">
  <section id="contact" class="contact mb-5">
    <div class="container" data-aos="fade-up">
      <br><br>
      <div class="row">
      <div class="heading_container heading_center">
         <h2>
            Your <span>Appointments</span>
         </h2><br>
      </div>
    </div>
        @if(count($appo))

      <a href="/appointment" class="btn btn-primary">Add appointment</a> <br><br>
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
              @elseif ($item->status==0)
              <button class="btn btn-info btn-sm">Pending</button>
              @elseif($item->status==1)
              <button class="btn btn-warning btn-sm">Accepted</button>
              @elseif($item->status==2)
              <button class="btn btn-secondary btn-sm">Appointment Cancelled</button>
              @endif
            </td>
            <td>
              @if($item->result_status==1)
              <button class="btn btn-success btn-sm">Result Generated</button>
              @elseif ($item->cancel_status==0)

              <form action="{{url('/update_appo_cancel/'.$item->id)}}" method="POST">
                @csrf
                <input type="number" name="cancel_appo" value="1" hidden>
                <input type="number" name="up_status" value="2" hidden>
                <button class="btn btn-success btn-sm" onclick="return confirm('Do you want to cancel appointment ?')">Cancel Appointment</button>
              </form>

              @elseif($item->cancel_status==1)
              <button class="btn btn-danger btn-sm">Cancelled</button>
              @endif
            </td>
          </tr>

          @endforeach
        </tbody>
      </table>


    </div>
    @else

         <div class="container-fluid  mt-100">
            <div class="row">

               <div class="col-md-12">

                  <div class="card">
                     <div class="card-header">
                     </div>
                     <div class="card-body cart">
                        <div class="col-sm-12 empty-cart-cls text-center">
                           <img src="https://thumbs.dreamstime.com/b/no-stop-sign-time-calendar-line-icon-clock-watch-caution-prohibited-ban-symbol-design-vector-134567352.jpg" width="230" height="230" class="img-fluid mb-4 mr-3">

                           <h3><strong>You have no Appointment scheduled</strong></h3>
                                <h4>Scedule your Appointment</h4>
                           <a href="/appointment" class="btn btn-danger carst-btn-transform m-3" data-abc="true">Add Appointment</a>


                        </div>
                     </div>
                  </div>


               </div>

            </div>

         </div>

         @endif
  </section>




</main><!-- End #main -->


@endsection