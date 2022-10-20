@extends('layouts.app')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center mb-2">
                    <div class="col">
                        <h5>Switch Channel</h5>
                        <a href="{{ route('instagram') }}" type="button" class="btn mb-2 btn-outline-danger"><span class="fe fe-instagram fe-32"></span></a>
                        <a href="{{ route('facebook') }}" type="button" class="btn mb-2 btn-outline-primary"><span class="fe fe-facebook fe-32"></span></a>
                        <a href="{{ route('sentiments') }}" type="button" class="btn mb-2 btn-outline-success"><span class="fe fe-twitter fe-32"></span></a>
                    </div>
                    <div class="col text-center" style="margin-top: 20px;">
                        <span style="font-size: 25px; font-weight: bold;">INSTAGRAM</span>
                    </div>
                    <div class="col text-center" style="margin-top: 25px;">

                        <div class="form-group d-none d-lg-inline">
                            <label for="reportrange" class="sr-only">Date Ranges</label>
                            <div id="reportrange" class="px-2 py-2 text-muted">
                                <span class="small"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <span>(Last 10 Days)</span>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card shadow eq-card mb-4">
                                    <div class="card-body">
                                        <div class="chart-widget">
                                            <div id="totalpost"></div>
                                        </div>
                                        <div class="row items-align-center">
                                            <div class="col-12 text-center">
                                                <p class="text-muted">+12%</p>
                                            </div>
                                        </div>
                                    </div> <!-- .card-body -->
                                </div> <!-- .card -->
                            </div> <!-- .col -->
                            <div class="col-md-6">
                                <div class="card shadow eq-card mb-4">
                                    <div class="card-body">
                                        <div class="chart-widget">
                                            <div id="engagement"></div>
                                        </div>
                                        <div class="row items-align-center">
                                            <div class="col-12 text-center">
                                                <p class="text-muted">-78%</p>
                                            </div>
                                        </div>
                                    </div> <!-- .card-body -->
                                </div> <!-- .card -->
                            </div> <!-- .col -->
                            <div class="col-md-6">
                                <div class="card shadow eq-card mb-4">
                                    <div class="card-body">
                                        <div class="chart-widget">
                                            <div id="video"></div>
                                        </div>
                                        <div class="row items-align-center">
                                            <div class="col-12 text-center">
                                                <p class="text-muted">+8%</p>
                                            </div>
                                        </div>
                                    </div> <!-- .card-body -->
                                </div> <!-- .card -->
                            </div> <!-- .col -->
                            <div class="col-md-6">
                                <div class="card shadow eq-card mb-4">
                                    <div class="card-body">
                                        <div class="chart-widget">
                                            <div id="impression"></div>
                                        </div>
                                        <div class="row items-align-center">
                                            <div class="col-12 text-center">
                                                <p class="text-muted">+90%</p>
                                            </div>
                                        </div>
                                    </div> <!-- .card-body -->
                                </div> <!-- .card -->
                            </div> <!-- .col -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow">
                            <div class="card-header">
                                <strong class="card-title mb-0">Positive Engagement</strong>
                            </div>
                            <div class="card-body">
                                <canvas id="pieChartjs" width="400" height="300"></canvas>
                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div>
                </div>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

</main> <!-- main -->
@endsection