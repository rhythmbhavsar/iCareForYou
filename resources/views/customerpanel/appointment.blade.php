@extends('customerpanel.master')
@section('content')


<main id="main">
  <section id="contact" class="contact mb-5">
    <div class="container" data-aos="fade-up">
    <br><br>
      <div class="row">
      <div class="heading_container heading_center">
         <h2>
            Take <span>Appointment</span>
         </h2><br>
      </div>
      </div>

      

      <div class="form mt-5">
        <form action="{{url('/add_app')}}" method="post" role="form" class="php-email-form">
          @csrf

              <input type="text" name="user_id" class="form-control" id="name" value="{{(Session::get('CustomerLoginId')['id'])}}" hidden>
            
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
          </div>
          
          
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" id="name" value="{{(Session::get('CustomerLoginId')['email'])}}" readonly>
            </div>
          </div>
         
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Mobile Number</label>
            <div class="col-sm-10">
              <input type="number" name="mobile" class="form-control" placeholder="Your mobile" required>
            </div>
          </div>
          
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Select Address</label>
            <div class="col-sm-10">
              <select class="form-select" id="floatingSelect" name="address" aria-label="Category">
                @foreach ($address as $item)
                <option value="{{ $item->address}}">{{ $item->address}}</option>
            @endforeach
                </select><br>
            </div>
          </div>


          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Test type</label>
            <div class="col-sm-10">
              <select class="form-select" id="floatingSelect" name="t_type" aria-label="Category">
                  <option value="breast-cancer">Breast Cancer</option>
              </select><br>
            </div>
          </div>

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
              <input type="date" name="date" class="form-control"  min="<?php echo date('Y-m-d', strtotime('+1 days')) ?>" max="<?php echo date('Y-m-d', strtotime('+60 days')) ?>"  required>
            </div>
          </div>
          
          

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Time slot</label>
            <div class="col-sm-10">
              <select class="form-select" id="floatingSelect" name="time_slot" aria-label="Category">
                  <option value="10:00-11:00 am">10:00-11:00 am</option>
                  <option value="11:00-12:00 am">11:00-12:00 am</option>
                  <option value="12:00-01:00 pm">12:00-01:00 pm</option>
                  <option value="01:00-02:00 pm">01:00-02:00 pm</option>
                  <option value="02:00-03:00 pm">02:00-03:00 pm</option>
                  <option value="03:00-04:00 pm">03:00-04:00 pm</option>
                  <option value="04:00-05:00 pm">04:00-05:00 pm</option>
                  <option value="05:00-06:00 pm">05:00-06:00 pm</option>
                  <option value="06:00-07:00 pm">06:00-07:00 pm</option>
              </select><br>
            </div>
          </div>

          
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div><!-- End Contact Form -->

    </div>
  </section>


  

</main><!-- End #main -->


@endsection