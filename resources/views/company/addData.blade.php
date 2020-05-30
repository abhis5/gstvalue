@extends('layouts.app')
@section('content')

<script>
    function validateform() {
        var name = document.addData.name.value;


        if (name != null || name != "") {
            document.getElementById("nameValidate").style.visibility = "visible";
            return true;
        }
    }
</script>

<div>
    <div class="container ">
        <div class="row justify-content-center ">
            <div class="col-sm">
                <div class="card bg-light mb-3  display-1s border border-primary shadow p-3 mb-5 rounded" style="max-width: 100%;">
                    <div class="card-header text-center card-header bg-transparent border-success ">
                        <h3>Add Company </h3>
                    </div>
                    <div class="card-body border border-primary">
                        <form method="post" name="addData" class="was-validated" action="{{ url('/company/store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-6 font-weight-bold">
                                    <label for="company">Company Name</label>

                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter company name" required>

                                    <div class="invalid-feedback">Provide Proper name.</div>

                                    <!-- <div class="valid-feedback">Looks Goood!</div> -->


                                </div>

                                <div class="form-group col-md-6 font-weight-bold">
                                    <label for="gst_no">GST NO</label>
                                    <input type="text" class="form-control prepend" id="gst_no" name="gst_no" placeholder="Enter GST number" required minlength="15" maxlength="15" pattern="^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$">
                                    <div class="invalid-feedback">Provide Proper GST number in Format.</div>
                                </div>

                                <div class="form-group col-md-12 font-weight-bold">
                                    <label for="address">Company Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" required>
                                    <div class="invalid-feedback">Please enter Address.</div>

                                </div>

                                <div class="form-group col-md-4 font-weight-bold">
                                    <label for="mobile">Company Phone No</label>
                                    <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="mobile" minlength="10" maxlength="10" required pattern="[7-9]{1}[0-9]{9}">
                                    <div class="invalid-feedback">Enter 10 digit valid mobile number.</div>
                                </div>


                                <div class="form-group col-md-4 font-weight-bold">
                                    <label for="email">Company Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                                    <div class="invalid-feedback">Provide a valid Email.</div>

                                </div>

                                <div class="form-group col-md-4 font-weight-bold">
                                    <label for="email_pass">Company Email Password</label>
                                    <input type="email_pass" class="form-control" id="email_pass" name="email_pass" placeholder="email_pass" >
                                </div>

                                <div class="form-group col-md-4 font-weight-bold">
                                    <label for="gst_id">GST ID</label>
                                    <input type="gst_id" class="form-control" id="gst_id" name="gst_id" placeholder="gst_id">
                                </div>

                                <div class="form-group col-md-4 font-weight-bold">
                                    <label for="gstid_pass">GST Password</label>
                                    <input type="gstid_pass" class="form-control" id="gstid_pass" name="gstid_pass" placeholder="gstid_pass">
                                </div>

                                <div class="form-group col-md-4 font-weight-bold">
                                    <label for="type">Company Type</label>
                                    <select class="form-control" id="type" name="type" required>
                                        <option value="999" disabled>Select Dealer Type</option>
                                        <option value="1">Regular</option>
                                        <option value="2">Composition</option>
                                    </select>
                                </div>



                                <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>


                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection