@extends('layouts.app')

@section('content')

<head>

<style>
.profile{

  width: 100%;
} 
.hidden{
  visibility:hidden;
}

</style>


</head>

<body>

  
<!-- Jumbotron -->
<div class="jumbotron text-center  lighten-6  border border-primary shadow p-3 mb-5 bg-blue-grey rounded profile mw-100"  >
<!-- <p class="hidden"> ajhggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggsdddddddddd </d> -->
  <!-- Title -->


  

  <h2 class="card-title h2 text-uppercase">{{ $profile -> name}}</h2>  
  <p class="indigo-text my-1 font-weight-bold">  {{ $profile -> type}} Dealer  </p>

  <!-- Subtitle -->
  <p class="indigo-text my-2 font-weight-bold text-capitalize">  {{ $profile -> address}}  </p>


  <?php if ( $profile -> type == '1') {   ?>
    regular
  <form class="form-inline needs-validation" action="{{ url('/filing/store') }} " method="get">
  

  <input type="hidden" id="gst_id" name="gst_id" value="{{$profile -> id}}">
  <select type="text" class="form-control mb-2 mr-sm-2" id="inline-email" placeholder="Select Year" required name="year" >
      <option value="2019-20">2019-20</option>
    <option value="2018-19">2018-19</option>
    <option value="2017-18">2017-18</option>
    <option value="2016-17">2016-17</option>
    <option value="2015-16">2015-16</option>
  
  </select>

  <select type="text" class="form-control mb-2 mr-sm-2" id="inline-email" placeholder="Select Month"   name="month" required>
  <option  disabled selected >Select Month</option>
    <option  value='1'>Janaury</option>
    <option value='2'>February</option>
    <option value='3'>March</option>
    <option value='4'>April</option>
    <option value='5'>May</option>
    <option value='6'>June</option>
    <option value='7'>July</option>
    <option value='8'>August</option>
    <option value='9'>September</option>
    <option value='10'>October</option>
    <option value='11'>November</option>
    <option value='12'>December</option>
    </select>
  
 

 
  

  <div class="form-check mb-2 mr-sm-2">
    <input class="form-check-input" type="checkbox" id="inline-check"  value="1"   name="3b">
    <label class="form-check-label" for="inline-check">GSTR-3B</label>
  
  </div>


  <div class="form-check mb-2 mr-sm-2">
    <input class="form-check-input" type="checkbox" id="inline-check"  value="1"   name="r1">
    <label class="form-check-label" for="inline-check">GSTR-1</label>
  
  </div>

  <div class="form-check mb-2 mr-sm-2">
    <input class="form-check-input" type="checkbox" id="inline-check"  value="1"   name="pay">
    <label class="form-check-label" for="inline-check">Pay Status</label>
  
  </div>


  <div class="form-check mb-2 mr-sm-2">
    <input class="form-check-input" type="checkbox" id="inline-check"  value="1"   name="check" required>
    <label class="form-check-label" for="inline-check">Check to Confirm</label>
  
  </div>
  <button type="submit" class="btn btn-primary mb-2 mr-sm-2">Create User!</button>
</form>
 
</div>
<?php  } else { ?>






      composition
  <form class="form-inline needs-validation" novalidate>
  <label class="sr-only" for="inline-email">Email</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="inline-email" placeholder="Enter email" required>
  <div class="invalid-feedback">Name can't be blank</div>
  <div class="valid-feedback">Looks good!</div>

  <label class="sr-only" for="inline-password">Password</label>
  <input type="password" class="form-control mb-2 mr-sm-2" id="inline-password" placeholder="Password" required>
  <div class="invalid-feedback">Please provide a valid value.</div>
  <div class="valid-feedback">Looks good!</div>

  <div class="form-check mb-2 mr-sm-2">
    <input class="form-check-input" type="checkbox" id="inline-check" required>
    <label class="form-check-label" for="inline-check">Terms</label>
    <div class="invalid-feedback">Terms must be accepted</div>
    <div class="valid-feedback">Looks good!</div>
  </div>

  <button type="submit" class="btn btn-primary mb-2 mr-sm-2">Create User!</button>
</form>
 
</div> <?php  }  ?>


<?php if ( $profile -> type == '1') {   ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Year</th>
      <th scope="col">Month</th>
      <th scope="col">3B</th>
      <th scope="col">R1</th>
      <th scope="col">R1</th>
     
    </tr>
  </thead>
  <tbody>

  <?php
$months = array("Janunary", "February", "March" , "April" , "May" , "June" , "July" , "August" ,"Septemer" , "October" , "November" , "December");
$gstr_3b = array("Filed" , "Not Filed");
?>

  <?php  foreach ($files as $file) {  ?>
    <tr>
      <th scope="row">{{ $file->year }} </th>
      <td>    {{$months[($file -> month) -1]   }} </td>
    
      <?php  if (  $file-> gstr_3b == '1'   ) {  ?>
      <td class=" bg-primary">Filed </td>
      <?php   }?>
      <?php  if (  $file-> gstr_3b == NULL  ) {  ?>
        <td class="bg-danger"> Not Filed  </td>
        <?php   } ?>

        <?php  if (  $file-> gstr_1 == '1'   ) {  ?>
      <td class=" bg-primary">Filed </td>
      <?php   }?>
      <?php  if (  $file-> gstr_1 == NULL   ) {  ?>
        <td class="bg-danger"> Not Filed  </td>
        <?php   } ?>

        <?php  if (  $file-> paid == '1'   ) {  ?>
      <td class=" bg-primary">Paid </td>
      <?php   }?>
      <?php  if (  $file-> paid == NULL   ) {  ?>
        <td class="bg-danger"> Not Paid  </td>
        <?php   } ?>


    
    </tr>
    <?php } ?>  
  </tbody>
</table>
<?php   }?>


<body>
@endsection