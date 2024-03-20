@extends('layouts.model')
@section('card')
    <div class="label mt-4 p-4">
        <div class="row justify-content-center">
            <div class="col-5 ">
                <div class="rectangle rounded bg-primary text-white border border-primary">
                    <strong>
                        <p>Total Income</p>
                    </strong>
                    <h2>$ 579,000</h2>
                    <p>Saved 25%</p>
                </div>
            </div>
            <div class="col-5">
                <div class="rectangle rounded bg-info text-white border border-info">
                    <strong>
                        <p>Total Expence</p>
                    </strong>
                    <h2>$ 79,000</h2>
                    <p>Saved 25%</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-5">
                <div class="rectangle rounded bg-success text-white border border-success">
                    <strong>
                        <p>Cash on Hand</p>
                    </strong>
                    <h2>$ 92,000</h2>
                    <p>Saved 25%</p>
                </div>
            </div>
            <div class="col-5">
                <div class="rectangle rounded bg-success-subtle text-white border border-success-subtle">
                    <strong>
                        <p>Net Profit Margin</p>
                    </strong>
                    <h2>$ 579,000</h2>
                    <p>Saved 65%</p>
                </div>
            </div>
        </div>
    </div>
    <div class="chart row" id="chartjs">
        <div class="col-6">
            <canvas id="myChart" width="200" height="100"></canvas>
        </div>
        <div class="col-6 row">
            <div class="col-6">
                <canvas id="myDoughnutChart" width="600" height="600"></canvas>
            </div>
            <div class="col-6">
                <canvas id="doughnutChart" width="600" height="600"></canvas>
            </div>
        </div>
    </div>
@endsection
