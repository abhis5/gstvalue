@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
   

</head>

<body>




<!-- Page Content -->
<div id="page-content-wrapper">

  
<div>
  <div class="container-fluid">
    <h1 class="mt-4">Company Data</h1>
  </div>
</div>
<div>  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add Data
</button> </div>
<div>
<div class="table-responsive-sm">

<table class="table fixed">
  <thead class="thead-dark">
    <tr>
      <th scope="col" width="30px" >ID</th>
      <th scope="col" width="200px">Name</th>
      <th scope="col" width="150px">GST No</th>
      <th scope="col" width="100px">Mobile</th>
      <th scope="col" width="200px">Email</th>
      <th scope="col" width="100px">Email-pass</th>
      <th scope="col" width="150px">GST-ID</th>
      <th scope="col" width="100px">GST-PASS</th>
      <th scope="col" width="100px">Type</th>
      <th scope="col" width="100px">Profile</th>

    </tr>
  </thead>
  <tbody>
  <?php  foreach ($company as $com) {  ?>
    <tr>
      <th scope="row"> {{ $com -> id }}</th>
      <td >   {{ $com -> name }}</td>
      <td >   {{ $com -> gst_no }}</td>
      <td >  {{ $com -> mobile }} </td>
      <td >  {{ $com -> email  }}</td>
      <td >  {{ $com -> email_pass }}</td>
      <td > {{ $com -> gst_id }}   </td>
      <td > {{ $com -> gst_pass }}   </td>
      <td > {{ $com -> type }}   </td>
      <td>   <a href="profile/{{$com->id}}">View Profile</a>
     </td> </tr>


    <?php } ?> 
    
  
    
  </tbody>
</table>
<div>
    <div>
        <div>

<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->


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
      <form method="post"   action="{{ url('/company/store') }}" enctype="multipart/form-data" >
      {{ csrf_field() }}

  <div class="form-group">
    <label for="company">Company Name</label>
    <input type="text" class="form-control" id="name"   name="name" placeholder="Enter company name">
</div>

<div class="form-group">
    <label for="gst_no">GST NO</label>
    <input type="text" class="form-control" id="gst_no"   name="gst_no" placeholder="Enter company name">
</div>

<div class="form-group">
    <label for="address">Company Address</label>
    <input type="text" class="form-control" id="address" name="address"  placeholder="Enter address">
</div>

<div class="form-group">
    <label for="mobile">Company Phone No</label>
    <input type="text" class="form-control" id="mobile" name="mobile"  placeholder="mobile">
</div>

<div class="form-group">
    <label for="email">Company Email</label>
    <input type="email" class="form-control" id="email" name="email"  placeholder="email">
</div>

<div class="form-group">
    <label for="email_pass">Company Email Password</label>
    <input type="email_pass" class="form-control" id="email_pass" name="email_pass"  placeholder="email_pass">
</div>

<div class="form-group">
    <label for="gst_id">GST ID</label>
    <input type="gst_id" class="form-control" id="gst_id" name="gst_id"  placeholder="gst_id">
</div>

<div class="form-group">
    <label for="gstid_pass">GST Password</label>
    <input type="gstid_pass" class="form-control" id="gstid_pass" name="gstid_pass"  placeholder="gstid_pass">
</div>



<div class="form-group">
    <label for="type">Company Type</label>
    <select  class="form-control" id="type" name="type">
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

  function deleteData(id){
          var csrf_token=$( 'meta[name="csrf_token"] ') . atter('content');
           swal({ 
               console.log("dfafafg");
              title: "Are you sure?",
              text: "Once deleted, you will not be able to recover this imaginary file!",
             icon: "warning",
             buttons: true,
             dangerMode: true,

            }) .then ((willDelete)) -> {
                      if(willDelete){
                         $.ajax({
                             url:"{{ url('company/delete')  }}" + '/' +id,
                             type: "POST"
                             data : { '_method' : 'DELETE' , '_token' : csrf_token},
                             success : function(data){
                                 table1.ajax.reload();
                                 swal({
                                   title: "Delete done",
                                   text: "clicked",
                                   icon: "success",
                                   button : "done",
                                 });                                   


                             },
                             error : function(){
                               swal({
                                 title: 'oops',
                                 text: data.message,
                                 type: 'error',
                                 timer: '1500'
                               })
                             }


                         });


                      }else{
                        swal("your file is safe");
                      }
            });


  }


</script>


 
</body>

</html>
@endsection



