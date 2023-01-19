@extends('labpanel.labmaster')
@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Welcome {{Session::get('LabLoginId')['email']}}</h1>
      <nav>
       
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">


          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
  @endsection


