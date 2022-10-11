@extends('layouts.app')

@section('content')

<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <!-- Recent Activity -->
                    <div class="col-md-12 col-lg-3 mb-4">
                        <div class="card timeline shadow">
                            <div class="card-header">
                                <strong class="card-title">PVCs By States</strong>
                            </div>
                            <div id="pvcdata" class="card-body" style="height:510px; overflow-y: auto; overflow-x: hidden;">

                            </div> <!-- / .card-body -->
                        </div> <!-- / .card -->
                    </div> <!-- / .col-md-6 -->
                    <!-- Striped rows -->
                    <div class="col-md-12 col-lg-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-6 col-xl-3 mb-4">
                                        <div class="card shadow bg-danger text-white border-0">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-3 text-center">
                                                        <span class="circle circle-sm bg-primary-light">
                                                            <i class="fe fe-16 fe-shopping-bag text-white mb-0"></i>
                                                        </span>
                                                    </div>
                                                    <div class="col pr-0">
                                                        <p class="small text-white mb-0"># of Accredited Votes (AS COLLATED)</p>
                                                        <span class="h3 mb-0 text-white counter-count">29364209</span><br />
                                                        <span class="small text-white">35% of registered voters</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 mb-4">
                                        <div class="card shadow border-0">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-3 text-center">
                                                        <span class="circle circle-sm bg-primary">
                                                            <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                                                        </span>
                                                    </div>
                                                    <div class="col pr-0">
                                                        <p class="small text-muted mb-0"># of Valid Votes (AS COLLATED)</p>
                                                        <span class="h3 mb-0 counter-count">27324583</span><br />
                                                        <span class="small text-success">93% of accredited voters</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 mb-4">
                                        <div class="card shadow border-0">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-3 text-center">
                                                        <span class="circle circle-sm bg-primary">
                                                            <i class="fe fe-16 fe-filter text-white mb-0"></i>
                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <p class="small text-muted mb-0"># of Rejected Votes (AS COLLATED)</p>
                                                        <span class="h3 mb-0 counter-count">1289607</span><br />
                                                        <span class="small text-success">4% of accredited voters</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 mb-4">
                                        <div class="card shadow border-0">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-3 text-center">
                                                        <span class="circle circle-sm bg-primary">
                                                            <i class="fe fe-16 fe-activity text-white mb-0"></i>
                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <p class="small text-muted mb-0"># of Votes Casts (AS COLLATED)</p>
                                                        <span class="h3 mb-0 counter-count">28614190</span><br />
                                                        <span class="small text-success">97% of accredited voters</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end section -->

                                <!-- info small box -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card shadow mb-4">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <strong>Election votes by party</strong>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="chart-box">
                                                            <div id="donutChartWidget-1" style="height: 290px;"></div>
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-12 -->
                                                </div> <!-- .row -->
                                            </div> <!-- .card-body -->

                                            <div class="card-body">
                                                <div class="chart-widget">
                                                    <div id="pieChartWidget-1" style="height: 280px;"></div>
                                                </div>
                                            </div> <!-- .card-body -->

                                        </div> <!-- .card -->
                                    </div> <!-- .col-md -->
                                    <div class="col-md-7">
                                        <div class="card shadow mb-4">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <strong>Registered Voters vs Collected PVC</strong>
                                                </div>
                                                <div class="map-box" style="position: relative;">
                                                    <h3 class="text-center" id="state_name"></h3>
                                                    <div id="container" style="width: 100%; height: 560px;"></div>
                                                </div>
                                                <div id="state-details">
                                                    <div class="row">
                                                        <div class="col-6 text-center">
                                                            <p class="text-muted mb-0">Total Registered Voters</p>
                                                            <h4 class="mb-1" id="pdp">84,004,084</h4>
                                                        </div>
                                                        <div class="col-6 text-center">
                                                            <p class="text-muted mb-0">Total Collected PVCs</p>
                                                            <h4 class="mb-1" id="apc">77,775,502</h4>
                                                        </div>
                                                    </div>
                                                    <!--div class="row align-items-center h-100 my-2">
                                                        <div class="col">
                                                            <p class="mb-0">PDP</p>
                                                            <span class="my-0 text-muted small">0%</span>
                                                        </div>
                                                        <div class="col-auto text-right">
                                                            <span>118</span><br />
                                                            <div class="progress mt-2" style="height: 4px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center my-2 output">
                                                        <div class="col">
                                                            <p class="mb-0">APC</p>
                                                            <span class="my-0 text-muted small">0%</span>
                                                        </div>
                                                        <div class="col-auto text-right">
                                                            <span>1008</span><br />
                                                            <div class="progress mt-2" style="height: 4px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div-->
                                                </div>

                                            </div>
                                        </div>
                                    </div> <!-- .col -->
                                </div> <!-- / .row -->
                            </div>
                        </div>
                    </div> <!-- Striped rows -->
                </div> <!-- .row-->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
</main> <!-- main -->

@endsection