@extends('layout.layout')
@section('title','Second Question')
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
                        <a class="nav-link" id="0" data-toggle="tab" aria-controls="tab1" href="{{ route('firstQuestion') }}" aria-expanded="true">Question No. 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="1" data-toggle="tab" aria-controls="tab2" href="{{ route('secondQuestion') }}" aria-expanded="true">Question No. 2</a>
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
            <h5>1) Find the first customer who spent more money on orders from the given database?</h5>
            <h5 class="mt-4">Answer:</h5>
            <div class="table-responsive mt-4">
                <table class="table table-hover table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>Customer</th>
                            <th>Total Money Spent For Orders</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $customerWithMoreMoneySpent->customer->customerName }}</td>
                            <td>{{ $customerWithMoreMoneySpent->order_details_sum_price_each }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h5>2) Find the first customer who has highest number of orders from the given database?</h5>
            <h5 class="mt-4">Answer:</h5>
            <div class="table-responsive mt-4">
                <table class="table table-hover table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>Customer</th>
                            <th>Total Orders</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $customerWithHighestOrders->customerName }}</td>
                            <td>{{ $customerWithHighestOrders->orders_count }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
