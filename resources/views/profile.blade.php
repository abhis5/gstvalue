@extends('layouts.app')

@section('content')
<body>

  
<!-- Jumbotron -->
<div class="jumbotron text-center blue-grey lighten-6  border border-primary shadow p-3 mb-5 bg-blue-grey rounded">

  <!-- Title -->
  <h2 class="card-title h2 text-uppercase">{{ $profile -> name}}</h2>  
  <p class="indigo-text my-1 font-weight-bold">  {{ $profile -> type}} Dealer  </p>

  <!-- Subtitle -->
  <p class="indigo-text my-2 font-weight-bold text-capitalize">  {{ $profile -> address}}  </p>

  <!-- Grid row -->
  <div class="row d-flex justify-content-center">

    <!-- Grid column -->
    <div class="col-xl-7 pb-2">

      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga aliquid dolorem ea distinctio exercitationem delectus qui, quas eum architecto, amet quasi accusantium, fugit consequatur ducimus obcaecati numquam molestias hic itaque accusantium doloremque laudantium, totam rem aperiam.</p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->





</div>
<!-- Jumbotron -->
<body>


@endsection
