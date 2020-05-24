@extends('layouts.app')
@section('content')
<?php
$d_type = array("Regular", "Composition");

?>
<div>
    <div class="container">
        <div class="row justify-content-center  ">

            <div class="col-sm">
                <div class="card bg-light mb-3  display-1s border border-primary shadow p-3 mb-5 rounded" style="max-width: 100%;">
                    <form method="POST" action="{{ url('/company/edit/submit/'.$company-> id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="company">Company Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter company name" required value="{{ $company -> name }}">
                            </div>

                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="gst_no">GST NO</label>
                                <input type="text" class="form-control" id="gst_no" name="gst_no" placeholder="Enter GST number" required minlength="15" maxlength="15" value="{{ $company -> gst_no }}">
                            </div>

                            <div class="form-group col-md-12 font-weight-bold">
                                <label for="address">Company Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" required value="{{ $company -> address }}">
                            </div>

                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="mobile">Company Phone No</label>
                                <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="mobile" minlength="10" maxlength="10" value="{{ $company -> mobile }}">
                            </div>


                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="email">Company Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{ $company -> email }}">
                            </div>

                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="email_pass">Company Email Password</label>
                                <input type="email_pass" class="form-control" id="email_pass" name="email_pass" placeholder="email_pass" required value="{{ $company -> email_pass }}">
                            </div>

                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="gst_id">GST ID</label>
                                <input type="gst_id" class="form-control" id="gst_id" name="gst_id" placeholder="gst_id" value="{{ $company -> gst_id }}">
                            </div>

                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="gstid_pass">GST Password</label>
                                <input type="gstid_pass" class="form-control" id="gstid_pass" name="gstid_pass" placeholder="gstid_pass" value="{{ $company -> gst_pass }}">
                            </div>

                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="type">Company Type</label>
                                <select class="form-control" id="type" name="type">
                                    <option value="999" selected disabled>Select Dealer Type</option>
                                    <option value="1" selected>  {{$d_type[($company -> type) -1] }} Dealer</option>
                                 
                                </select>
                            </div>
                            <div class="border border-light p-3 mb-4">

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            <div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection