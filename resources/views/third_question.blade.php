@extends('layout.layout')
@section('title','Third Question')
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
                        <a class="nav-link" id="1" data-toggle="tab" aria-controls="tab2" href="{{ route('secondQuestion') }}" aria-expanded="true">Question No. 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="2" data-toggle="tab" aria-controls="tab3" href="{{ route('thirdQuestion') }}" aria-expanded="true">Question No. 3</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row mt-4 px-5">
        <div class="col-12">
            <h5>Calculate ranks for the given teams based on their respective scores. Same scores should be ranked equally. <br>
                * If multiple teams get the same rank, the next ranks should be skipped based on the team count. <br>
                * e.g. If Team B & C gets second rank, 3rd rank should skipped & the team eligible for the 3rd rank should be given 4th rank. <br>
                * Do not use any loops, if statements, or ternary operators.
            </h5>
            <div class="table-responsive mt-4">
                <table class="table table-hover table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Team</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($scores as $score)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $score['team'] }}</td>
                            <td>{{ $score['score'] }}</td>
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
                            <th>Rank</th>
                            <th>Team</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ranks as $rank)
                        <tr>
                            <td>{{ $rank['rank'] }}</td>
                            <td>{{ $rank['team'] }}</td>
                            <td>{{ $rank['score'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
