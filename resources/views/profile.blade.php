@extends('layouts.app')

@section('content')
<?php
$months = array("Janunary", "February", "March", "April", "May", "June", "July", "August", "Septemer", "October", "November", "December");
$d_type = array("Regular", "Composition");

?>

<head>


  <script>
    $(document).ready(function() {
      $('#regular_data').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copyHtml5',
            exportOptions: {
              columns: [0, ':visible']
            }
          },
          {
            extend: 'excelHtml5',
            exportOptions: {
              columns: ':visible'
            }
          },

          {
            extend: 'print',
            exportOptions: {
              columns: ':visible'
            }
          },
          {
            extend: 'pdfHtml5',
            exportOptions: {
              columns: ':visible'
            }
          },
          'colvis'
        ]
      });
    });
  </script>



  <style>
    #MyForm {
      display: none;
      width: 300px;
      border: 1px solid #ccc;
      padding: 14px;
      background: #ececec;
    }

    .profile {

      width: 100%;
    }

    Z .hidden {
      visibility: hidden;
    }

    /* #switch{

  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 80px;
} */

    input[type=checkbox] {
      padding-left: 50px;
      padding-right: 5px;
      border-radius: 15px;

      -webkit-appearance: button;

      border: double 2px #00F;

      background-color: #0b0095;
      color: #000;
      white-space: nowrap;
      overflow: hidden;

      width: 15px;
      height: 50px;
    }

    .greenText {
      background-color: green;
    }

    .redText {
      background-color: red;
    }
  </style>



</head>

<body>






  <!-- Jumbotron -->
  <div class="jumbotron text-center  lighten-6  border border-primary shadow p-3 mb-5 bg-blue-grey rounded profile mw-100">


    <div class="container  view overlay">
      <div class="row justify-content-center mask flex-center rgba-blue-light ">

        <div class="col-sm  ">
          <div class="card text-white bg-primary mb-3  display-1s hoverable " style="max-width: 100%;">
            <div class="card-header  h1">{{ $profile -> name}}</div>
            <div class="card-body">
              <h5 class="card-title"> {{$d_type[($profile -> type) -1] }} Dealer</h5>
              <h5 class="card-title"> {{ $profile -> address }}</h5>
            </div>
            <div>
              <button class="btn p-3 mb-2 bg-info text-white" onclick="window.location.href='/company/edit/{{$profile->id}}';"> Edit Company </button>
              <button class="btn p-3 mb-2 bg-danger text-white" onclick="window.location.href='/company/delete/{{$profile->id}}';"> Delete Company </button>
            </div>
            <!-- <a href="/company/edit/{{$profile->id}}">Edit Profile</a> </button> -->
          </div>
        </div>
      </div>
    </div>
    @if(session()->has('selectMonth'))
    <div class="alert alert-danger">
      <strong>
        <p> Please Select Month!</p>
      </strong>
    </div>
    @endif

    @if(session()->has('editSuccess'))
    <div class="alert alert-success">
      <strong>
      
        <p> {{   print(session('editSuccess'))}}  </p>
      </strong>
    </div>
    @endif

    @if(session()->has('duplicateMonth'))
    <div class="alert alert-danger">
      <strong>
        <p> Duplicate Year and Month !</p>
      </strong>
    </div>
    @endif

    @if(session()->has('CompanyUpdateSuccess'))
    <div class="alert alert-success">
      <strong>
        <p> Company updated successfully!</p>
      </strong>
    </div>
    @endif

    @if(session()->has('addSuccess'))
    <div class="alert alert-success">
      <strong>
      <!-- <p> {{   print(session('addSuccess'))}}  </p> -->

      <p> {{ $requestData[0] }}  </p>
    
      </strong>
    </div>
    @endif
    <!-- Regular dealer profile page form -->
    <!-- Regular Dealer All Data -->
    <?php if ($profile->type == '1') {   ?>
      <div class="align-items-center row justify-content-center">
        <form class="form-inline needs-validation " action="{{ url('/filing/store') }} " method="get">

          <input type="hidden" id="gst_id" name="gst_id" value="{{$profile -> id}}">
          <div class="form-row align-items-center row justify-content-center border border-primary shadow p-3 mb-5 rounded ">

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text text-primary" for="inputGroupSelect01">Year</label>
              </div>
              <select class="custom-select" placeholder="Select Year" required name="year" required>
                <option value="2019-20">2019-20</option>
                <option value="2018-19">2018-19</option>
                <option value="2017-18">2017-18</option>
                <option value="2016-17">2016-17</option>
                <option value="2015-16">2015-16</option>
              </select>
            </div>


            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text text-primary" for="inputGroupSelect01">Month</label>
              </div>

              <select class="custom-select" placeholder="Select Year" placeholder="Month" name="month" required>
                <option value="999">Select Month</option>
                <option value='1'>Janaury</option>
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
            </div>



            <div class="input-group mb-3 ">
              <div class="input-group-prepend ">
                <label class="input-group-text text-primary" for="inputGroupSelect01">3B</label>
              </div>
              <select class="custom-select" placeholder="3B" required name="3b" required onchange="this.className=this.options[this.selectedIndex].className" class="blueText">
              <option class="blueText" value="999" selected>Select 3B</option> 
              <option class="greenText" value="1">Filed</option>
                <option class="redText" value="0" selected >Not Filed</option>

              </select>
            </div>


            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text text-primary" for="inputGroupSelect01">R1</label>
              </div>
              <select class="custom-select" placeholder="R1" required name="r1" required onchange="this.className=this.options[this.selectedIndex].className" class="blueText">
              <option class="blueText" value="999">Select R1</option> 
 
              <option class="greenText" value="1">Filed</option>
                <option class="redText" value="0">Not Filed</option>

              </select>
            </div>


            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text text-primary" for="inputGroupSelect01">Pay Status</label>
              </div>
              <select class="custom-select" placeholder="R1" required name="pay" required onchange="this.className=this.options[this.selectedIndex].className" class="blueText" >
              <option class="blueText" value="999">Select Pay</option> 

              <option class="greenText" value="1">Paid</option>
                <option class="redText" value="0">Not Paid</option>

              </select>
            </div>
            <div class="form-check mb-2 mr-sm-2">
              <input type="checkbox" class="form-check-input" id="materialUnchecked">
              <label class="form-check-label" for="materialUnchecked">Click to Confirm</label>

            </div>


            <div>
              <button type="submit" class="btn btn-primary mb-2 mr-sm-2">Submit</button>
            </div>
          </div>
        </form>
      </div>
      <div class=" border border-primary shadow p-3 mb-5 rounded">
        <table class="table table-hover table-bordered   dt-responsive nowrap" id="regular_data">
          <thead>
            <tr>
              <th scope="col">Year</th>
              <th scope="col">Month</th>
              <th scope="col">3B</th>
              <th scope="col">R1</th>
              <th scope="col">Pay Status</th>
              <th scope="col">Edit</th>

            </tr>
          </thead>
          <tbody>

            <?php foreach ($files as $file) {  ?>
              <tr>
                <th scope="row" class=" bg-success">{{ $file->year }} </th>
                <td class=" bg-success"> {{$months[($file -> month) -1 ]   }} </td>

                <?php if ($file->gstr_3b == '1') {  ?>
                  <td class=" bg-primary">Filed </td>
                <?php   } ?>
                <?php if ($file->gstr_3b == 0) {  ?>
                  <td class="bg-danger"> Not Filed </td>
                <?php   } ?>

                <?php if ($file->gstr_1 == '1') {  ?>
                  <td class=" bg-primary">Filed </td>
                <?php   } ?>
                <?php if ($file->gstr_1 == 0) {  ?>
                  <td class="bg-danger"> Not Filed </td>
                <?php   } ?>

                <?php if ($file->paid == '1') {  ?>
                  <td class=" bg-primary">Paid </td>
                <?php   } ?>
                <?php if ($file->paid == 0) {  ?>
                  <td class="bg-danger"> Not Paid </td>
                <?php   } ?>
                <th scope="row" width=50px>
                  <button class="btn  bg-info text-white" onclick="window.location.href='/profile/{{$file->id}}/editForm';"> Edit </button>

                </th>

              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    <?php  }  ?>

  </div>






  <!-- Composition dealer profile page form  -->










  <!-- Edit Model -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">



          <p>Your room number is: <span class="roomNumber"></span>.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>












</body>
@endsection