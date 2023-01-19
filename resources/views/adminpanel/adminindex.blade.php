@extends('adminpanel.adminmaster')
@section('content')
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
       <?php echo $chartdata?>
      ]);

      var options = {
        title: 'Product in Category',
         is3D: true,
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>
</head>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Welcome {{Session::get('AdminLoginId')['email']}}</h1>
      <nav>
       
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-6">
          
          <!-- Sales Card -->
            <div class="col-xxl-6 col-md-8">
              <div class="card info-card sales-card">

              
                <div class="card-body">
                  <h5 class="card-title">All Users </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6> <?php echo $users ?> </h6>
                     
                    </div>
                  </div>
                </div>

              </div>
              <div class="card info-card sales-card">

              
                <div class="card-body">
                  <h5 class="card-title">All Category </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6> <?php echo $category ?> </h6>
                     
                    </div>
                  </div>
                </div>

              </div>
              <div class="card info-card sales-card">

              
                <div class="card-body">
                  <h5 class="card-title">All Product </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6> <?php echo $product ?> </h6>
                     
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
         
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-6">

          <div class="row">
            
            <div id="piechart" style="width: 500px; height: 400px;" ></div>
            </div>

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
  @endsection
