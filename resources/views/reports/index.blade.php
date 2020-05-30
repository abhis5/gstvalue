@extends('layouts.app')
@section('content')


<div class="align-items-center row justify-content-center">
    <form class="form-inline " action="{{ route('reports.show') }}" method="POST">
        @csrf
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





            <div>
                <button type="submit" class="btn btn-primary mb-2 mr-sm-2">Submit</button>
            </div>
        </div>
    </form>
</div>



@endsection