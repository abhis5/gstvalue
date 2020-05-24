@extends('layouts.app')
@section('content')

<?php
$months = array("Janunary", "February", "March", "April", "May", "June", "July", "August", "Septemer", "October", "November", "December");
$d_type = array("Regular", "Composition");

?>
<!DOCTYPE html>
<html lang="en">

<head>


  <script>
    $(document).ready(function() {



      $('#all_company').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copyHtml5',
            className: 'btn-default',
            exportOptions: {
              columns: [0, ':visible']
            }
          },
          {
            extend: 'excelHtml5',
            className: 'btn-default',
            exportOptions: {
              columns: ':visible'
            }
          },

          {
            title: 'All Companies Data',

            customize: function(win) {
              $(win.document.body)
                .css('font-size', '10pt')
                .prepend(
                  '<img src="{{url('/images/LogoMakr_2Gbjpd.png ')}}" style="position:absolute; top:200; left:400;" />'
                );

              $(win.document.body).find('table')
                .addClass('compact')
                .css('font-size', 'inherit');
            },
            extend: 'print',
            className: 'btn-default',

            exportOptions: {
              columns: ':visible'
            }


          },



          {

            title: 'All Companies Data',

            customize: function(win) {
              $(win.document.body)
                .css('font-size', '10pt')
                .prepend(
                  '<img src="{{url(' / images / LogoMakr_2Gbjpd.png ')}}" style="position:absolute; top:200; left:400;" />'
                );

              $(win.document.body).find('table')
                .addClass('compact')
                .css('font-size', 'inherit');
            },
            extend: 'pdfHtml5',
            className: 'btn-default',
            exportOptions: {
              columns: ':visible'
            }
          },
          'colvis'
        ]
      });
    });
  </script>



</head>

<body>




  <!-- Page Content -->
  <div id="page-content-wrapper">


    <div class="container">
      <div class="container-fluid">
        <h1 class="mt-0 text-center text-info">Company Data</h1>
      </div>
    </div>
    <div> <button class="btn p-3 mb-2 bg-dark text-white shadow-sm p-3 mb-5  rounded" onclick="window.location.href='/company/add';">
        <!-- <a href="/company/add">Add Company</a> -->
        Add Company
      </button> </div>
    <div>

      <div class="table-responsive-lg table-bordered table-hover  ">

        <table class="table fixed " id="all_company">
          <thead class="thead-dark  ">
            <tr>
              <th scope="col" width="30px">ID</th>
              <th scope="col" width="200px">Name</th>
              <th scope="col" width="150px">GST No</th>
              <th scope="col" width="100px">Mobile</th>
              <th scope="col" width="200px">Email</th>
              <th scope="col" width="100px">Email-pass</th>
              <th scope="col" width="150px">GST-ID</th>
              <th scope="col" width="100px">GST-PASS</th>
              <th scope="col" width="100px">Type</th>
              <th scope="col" width="100px">Profile</th>
              <th scope="col" width="100px">GST</th>

            </tr>
          </thead>
          <tbody>
            <?php foreach ($company as $com) {  ?>
              <tr>
                <th scope="row"> {{ $com -> id }}</th>
                <td> {{ $com -> name }}</td>
                <td> {{ $com -> gst_no }}</td>
                <td> {{ $com -> mobile }} </td>
                <td> {{ $com -> email  }}</td>
                <td> {{ $com -> email_pass }}</td>
                <td id="gst_id"> {{ $com -> gst_id }} </td>
                <td> {{ $com -> gst_pass }} </td>
                <td> {{$d_type[($com -> type) -1] }} </td>
                <td> <a href="profile/{{$com->id}}">View Profile</a>
                <td> <a href="https://services.gst.gov.in/services/login?user_name={{$com->gst_id}}" onClick="copyToClipboard('{{$com -> gst_id  }}');" target="_blank">GST login </a>
                </td>
              </tr>


            <?php } ?>



          </tbody>
        </table>
        <div>
          <div>
            <div>

              <!-- /#page-content-wrapper -->

            </div>
            <!-- /#wrapper -->
          </div>

</body>
<!--  Add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ url('/company/store') }}" enctype="multipart/form-data">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="company">Company Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter company name" required>
          </div>

          <div class="form-group">
            <label for="gst_no">GST NO</label>
            <input type="text" class="form-control" id="gst_no" name="gst_no" placeholder="Enter company name" required>
          </div>

          <div class="form-group">
            <label for="address">Company Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" required>
          </div>

          <div class="form-group">
            <label for="mobile">Company Phone No</label>
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile" maxlength="10">
          </div>

          <div class="form-group">
            <label for="email">Company Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email">
          </div>

          <div class="form-group">
            <label for="email_pass">Company Email Password</label>
            <input type="email_pass" class="form-control" id="email_pass" name="email_pass" placeholder="email_pass">
          </div>

          <div class="form-group">
            <label for="gst_id">GST ID</label>
            <input type="gst_id" class="form-control" id="gst_id" name="gst_id" placeholder="gst_id">
          </div>

          <div class="form-group">
            <label for="gstid_pass">GST Password</label>
            <input type="gstid_pass" class="form-control" id="gstid_pass" name="gstid_pass" placeholder="gstid_pass">
          </div>



          <div class="form-group">
            <label for="type">Company Type</label>
            <select class="form-control" id="type" name="type">
              <option value="1">Regular</option>
              <option value="2">Composition</option>
            </select>
          </div>


          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

    </div>
  </div>
</div>



<!--  Edit Modal -->





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

  function myFunction() {
    var txt;
    if (confirm("Press a button!")) {

    } else {
      txt = "You pressed Cancel!";
    }

    swal("Hello world!");



    // delete function

    function deleteData(id) {
      var csrf_token = $('meta[name="csrf_token"] ').atter('content');
      swal({
        console.log("dfafafg");
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,

      }).then((willDelete)) - > {
        if (willDelete) {
          $.ajax({
            url: "{{ url('company/delete')  }}" + '/' + id,
            type: "POST"
            data: {
              '_method': 'DELETE',
              '_token': csrf_token
            },
            success: function(data) {
              table1.ajax.reload();
              swal({
                title: "Delete done",
                text: "clicked",
                icon: "success",
                button: "done",
              });


            },
            error: function() {
              swal({
                title: 'oops',
                text: data.message,
                type: 'error',
                timer: '1500'
              })
            }


          });


        } else {
          swal("your file is safe");
        }
      });


  }
</script>



</body>

</html>
@endsection