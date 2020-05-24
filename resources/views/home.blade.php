@extends('layouts.app')
@section('content')


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
  <title>Sidebar template</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">





</head>

<body>


  <div class="main-container">
    <img src="{{url('/images/main-banner.jpg')}}" alt="Norway" style="width:100%; height:30%" ;>
    <div class="text-block">
    </div>
  </div>

  <div class="container">
    <div class="card-deck">
      <div class="card border-primary mb-4" style="max-width: 23rem;">
        <div class="card-header text-success text-nowrap font-weight-bold">Companies</div>
        <div class="card-body text-primary ">
          <!-- <h5 class="card-title"> Total Companies : {{DB::table('companies')->count() }}</h5> -->
          <h5 class="card-title "> Total Regular Dealer : {{DB::table('companies') ->where('type', '1')->count()  }}</h5>
          <h5 class="card-title"> Total Composition Dealer : {{DB::table('companies') ->where('type', '2')->count()  }}</h5>
        </div>
      </div>

      <div class="card border-primary mb-4" style="max-width: 23rem;">
        <div class="card-header text-success font-weight-bold">GSTR 3B</div>
        <div class="card-body text-primary">
          <h5 class="card-title"> Total 3B Filed : {{DB::table('filings') ->where('gstr_3b', '1')->count()  }}</h5>
          <!-- <h5 class="card-title"> Total 3B Pending : {{DB::table('filings')  ->where('gstr_3b', '0')->count()  }}</h5> -->
        </div>
      </div>


      <div class="card border-primary mb-4" style="max-width: 23rem;">
        <div class="card-header text-success font-weight-bold">GSTR 1</div>
        <div class="card-body text-primary">
          <h5 class="card-title"> Total R1 Filed : {{DB::table('filings') -> where('gstr_1', '1') ->count()  }}</h5>
        </div>
      </div>

      <div class="card border-primary mb-4" style="max-width: 23rem;">
        <div class="card-header text-success font-weight-bold ">Payment</div>
        <div class="card-body text-primary">
          <h5 class="card-title"> Total Payment Done: {{DB::table('filings') -> where('paid', '1') ->count()  }}</h5>
          <h5 class="card-title"> Total Pending : {{DB::table('filings') -> where('paid', '0') ->count()  }}</h5>

        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>


</body>


</html>







<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script>



</body>

</html>
@endsection