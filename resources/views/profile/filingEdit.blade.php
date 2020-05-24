        @extends('layouts.app')
        @section('content')
        <?php
        $months = array("Janunary", "February", "March", "April", "May", "June", "July", "August", "Septemer", "October", "November", "December");
        $d_type = array("Regular", "Composition");
        ?>

        <!-- Jumbotron -->
        <div class="jumbotron text-center  lighten-6  border border-primary shadow p-3 mb-5 bg-blue-grey rounded profile mw-100">


            <div class="container">
                <div class="row justify-content-center ">

                    <div class="col-sm">
                        <div class="card text-white bg-primary mb-3  display-1s" style="max-width: 100%;">
                            <div class="card-header h1">{{ $profile -> name}}</div>
                            <div class="card-body">
                                <h5 class="card-title">  {{$d_type[($profile -> type) -1] }} Dealer</h5>
                               
                            </div>
                            <h2 class="card-title h2 text-uppercase"> <mark> {{ $filingData -> year }} (  {{$months[($filingData -> month) -1]   }} ) </mark> </h2>
                         

                        </div>


                    </div>

                </div>
            </div>


            <div>
                <form class="col-lg-6 offset-lg-3 " action="{{url('/profile/editForm/submit/'.$filingData->id)}}" method="get">
                    <div class="form-row align-items-center row justify-content-center">

                        <div class="col-auto">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">3B</div>
                                </div>

                                <select class="form-control" id="3b" name="3b">
                                    <?php if ($filingData->gstr_3b == 1) { ?>
                                        <option selected value='1'> Filed</option>
                                        <option value='0'> Not Filed</option> <?php   }  ?>


                                    <?php if ($filingData->gstr_3b == 0) { ?>
                                        <option selected value='0'> Not Filed</option>
                                        <option value='1'>Filed</option> <?php   }  ?>
                                </select>
                            </div>

                        </div>

                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">r1</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">R1</div>
                                </div>
                                <select class="form-control" id="R1" name="r1">

                                    <?php if ($filingData->gstr_1 == 1) { ?>
                                        <option selected value='1'> Filed</option>
                                        <option value='0'> Not Filed</option> <?php   }  ?>


                                    <?php if ($filingData->gstr_1 == 0) { ?>
                                        <option selected value='0'> Not Filed</option>
                                        <option value='1'>Filed</option> <?php   }  ?>
                                </select>
                            </div>
                        </div>


                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Payment</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">PAY</div>
                                </div>
                                <select class="form-control" id="pay" name="pay">

                                    <?php if ($filingData->paid == 1) { ?>
                                        <option selected value='1'> Paid</option>
                                        <option value='0'> Not Paid</option> <?php   }  ?>


                                    <?php if ($filingData->paid == 0) { ?>
                                        <option selected value='0'> Not Paid</option>
                                        <option value='1'>Paid</option> <?php   }  ?>
                                </select>



                            </div>
                        </div>



                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </div>
            </div>
            </form>

        </div>


        </div>

        <!-- Regular dealer profile page form -->






        @endsection