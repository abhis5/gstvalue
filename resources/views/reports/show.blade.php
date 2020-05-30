@extends('layouts.app')
@section('content')
<?php
$months = array("Janunary", "February", "March", "April", "May", "June", "July", "August", "Septemer", "October", "November", "December");
?>
<div class="jumbotron text-center  lighten-6  border border-primary shadow p-3 mb-5 bg-blue-grey rounded profile mw-100">

<button class="btn btn-primary" onclick="window.print()">Print this page</button>

    <div class="container  view overlay">
        <div class="row justify-content-center mask flex-center rgba-blue-light ">

            <div class="col-sm  ">
                <div class="card text-white bg-primary mb-3  display-1s hoverable " style="max-width: 100%;">
                    <div class="card-header  h1">Filing Report for Regular Dealer</div>
                    <div class="card-body">
                        <h5 class="card-title"> {{ $year }}</h5>
                        <h5 class="card-title"> {{$months[($month) -1 ]   }} </h5>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class=" border border-primary shadow p-3 mb-5 rounded">
        <table class="table table-hover table-bordered   dt-responsive nowrap" id="regular_data">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">3B</th>
                    <th scope="col">R1</th>
                    <th scope="col">Pay Status</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($report as $rep) {  ?>
                    <tr>
                        <?php if (($rep->month == $month) && ($rep->year == $year)) {  ?>
                            <th scope="row" >{{ $rep->name }} </th>
                            <th scope="row" >{{ $rep->mobile }} </th>
                            <td scope="row"> {{ $rep->gstr_3b }} </td>
                            <td scope="row"> {{ $rep->gstr_1 }} </td>
                            <td scope="row"> {{ $rep->paid }} </td>


                        <?php   } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <h3>Companies with No filing data this month </h3>
    <table class="table table-hover table-bordered   dt-responsive nowrap" id="regular_data">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone No</th>

            </tr>
        </thead>
        <tbody>




            <?php foreach ($company as $c) {
                $flag = 0;
                $data;
                foreach ($filed_id as $id) {
                    if ($c->id == $id->gst_id) {
                        $flag = 1;
                    }
                } ?>

                <?php if ($flag == 0) {  ?>

                    <tr>
                        <th scope="row" >{{ $c->name }} </th>
                        <th scope="row" >{{ $c->mobile }} </th>

                    </tr>


                <?php } ?>
            <?php  } ?>


        </tbody>
    </table>
</div>

</div>

@endsection

<!-- ((  $rep->gstr_3b == NULL ) && (  $rep->gstr_1 == NULL ) && (  $rep-> paid == NULL ) ) -->