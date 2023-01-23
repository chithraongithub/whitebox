@extends('layout.layout')
@section('title','First Question')
@section('content')
    <div class="row mb-2 d-flex">
        <div class="col-6">
            <h3 class="font-weight-bold px-3 py-3">Whitebox</h3>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col-12 text-left">
            <div class="tabs-container">
                <div class="elastic"></div>
                <ul class="nav nav-tabs" id="nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="0" data-toggle="tab" aria-controls="tab1" href="javascript:void(0)" aria-expanded="true">Question No. 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="1" data-toggle="tab" aria-controls="tab2" href="{{ route('secondQuestion') }}" aria-expanded="true">Question No. 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="2" data-toggle="tab" aria-controls="tab3" href="{{ route('thirdQuestion') }}" aria-expanded="true">Question No. 3</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row mt-4 px-5">
        <div class="col-12">
            <h5>Find the employee who made the most valuable sale?</h5>
            <div class="table-responsive mt-4">
                <table class="table table-hover table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Total Customers</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $employee['name'] }}</td>
                            <td>{{ $employee['email'] }}</td>
                            <td>{{ count($employee['sales']) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <h5>Answer:</h5>
            <div class="table-responsive mt-4">
                <table class="table table-hover table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Most Valuable Sale</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $employeeWithMostValuableSale['name'] }}</td>
                            <td>{{ $employeeWithMostValuableSale['email'] }}</td>
                            <td>{{ $mostValuableSale }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
