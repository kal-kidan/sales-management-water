@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Admin Management Dash Board') }}</div>

                <div class="row" style="margin:50px">
                    <div class=".col-sm-4 col-lg-4 .col-xl-4 .col-md-4" style="margin-bottom:10px">
                        <img class="'img-circle" src="images/products.png" alt="" width="40%">
                        <a href="/products"><h4 style="color:teal; font-size:17px">Product Management</h4></a>
                    </div>
                    <div class=".col-sm-4 col-lg-4 .col-xl-4 .col-md-4" style="margin-bottom:10px">
                        <img class="'img-circle" src="images/sales.png" alt=""  width="40%">
                        <a href="/sales"><h4 style="color:teal; font-size:17px">Sales</h4></a>
                    </div>
                    <div class=".col-sm-4 col-lg-4 .col-xl-4 .col-md-4" style="margin-bottom:10px">
                        <img class="'img-circle" src="images/task.png"  alt=""  width="40%">
                       <a href="" >  <h4 style="color:teal; font-size:17px">Task Management</h4> </a>
                    </div>

                    <div class=".col-sm-4 col-lg-4 .col-xl-4 .col-md-4" style="margin-top:10px">
                        <img class="'img-circle" src="images/reports.png" alt="" width="40%">
                       <a href="/report">  <h4 style="color:teal; font-size:17px">Report</h4> </a>
                    </div>
                    <div class=".col-sm-4 col-lg-4 .col-xl-4 .col-md-4" style="margin-top:10px">
                        <img class="'img-circle" src="images/employee.png" alt=""  width="40%">
                        <a href=""><h4 style="color:teal; font-size:17px">Human Resource Management</h4></a>
                    </div>
                    <div class=".col-sm-4 col-lg-4 .col-xl-4 .col-md-4" style="margin-top:10px">
                        <img class="'img-circle" src="images/department.png" alt=""  width="40%">\
                       <a href="">  <h4 style="color:teal; font-size:17px">Departments Management</h4> </a>
                    </div>


                  </div>
{{--
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}
            </div>
        </div>
    </div>
</div>

@endsection
