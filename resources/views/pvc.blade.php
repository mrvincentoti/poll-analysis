@extends('layouts.app')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-2">
                <div class="row">
                    <div class="col-md-12 col-xl-12 mb-4">
                        <div class="card shadow bg-warning text-white border-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <span class="circle circle-sm bg-primary-light">
                                            <i class="fe fe-16 fe-shopping-bag text-white mb-0"></i>
                                        </span>
                                    </div>
                                    <div class="col pr-0">
                                        <p class="small text-white mb-0">Total PVCs</p>
                                        <span class="h3 mb-0 text-white counter-count">29364209</span><br />
                                        <span class="small text-white">+35%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/end card-->
                    <div class="col-md-12 col-lg-12 mb-4">
                        <div class="card timeline shadow">
                            <div class="card-header">
                                <strong class="card-title">PVCs by States</strong>
                                <a class="float-right small text-muted" href="#!">View all</a>
                            </div>
                            <div class="card-body" data-simplebar="init" style="height:355px; overflow-y: auto; overflow-x: hidden;">
                                <div class="simplebar-wrapper" style="margin: -20px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 20px;">
                                                    <div class="list-group list-group-flush my-n3" id="pvc-states">
                                                        <div class="list-group-item">
                                                            <div class="row align-items-center">
                                                                <div class="col-auto">
                                                                    <input type="checkbox" class="custom-control-input-1">
                                                                </div>
                                                                <div class="col">
                                                                    <small><strong>Select All</strong></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item">
                                                            <div class="row align-items-center">
                                                                <div class="col-auto">
                                                                    <input type="checkbox" class="custom-control-input-1">
                                                                </div>
                                                                <div class="col">
                                                                    <small><strong>Borno</strong></small>
                                                                    <div class="my-0 text-muted small">
                                                                        <span class="badge badge-light text-muted mr-2">10%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto pr-0">
                                                                    <small><strong>1,345,000</strong></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item">
                                                            <div class="row align-items-center">
                                                                <div class="col-auto">
                                                                    <input type="checkbox" class="custom-control-input-1">
                                                                </div>
                                                                <div class="col">
                                                                    <small><strong>Adamawa</strong></small>
                                                                    <div class="my-0 text-muted small">
                                                                        <span class="badge badge-pill badge-light text-muted">9%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto pr-0">
                                                                    <small><strong>3,000,000</strong></small>
                                                                </div>
                                                            </div> <!-- / .row -->
                                                        </div> <!-- / .list-group -->
                                                        <div class="list-group-item">
                                                            <div class="row align-items-center">
                                                                <div class="col-auto">
                                                                    <input type="checkbox" class="custom-control-input-1">
                                                                </div>
                                                                <div class="col">
                                                                    <small><strong>Cross River</strong></small>
                                                                    <div class="my-0 text-muted small">
                                                                        <span class="badge badge-pill badge-light text-muted">9%</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto pr-0">
                                                                    <small><strong>3,000,000</strong></small>
                                                                </div>
                                                            </div> <!-- / .row -->
                                                        </div> <!-- / .list-group -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 360px; height: 1262px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="height: 99px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                                </div>
                            </div> <!-- / .card-body -->
                        </div> <!-- / .card -->
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="col-md-12 col-lg-12 mb-4">
                    <div class="card timeline shadow">
                        <div class="card-header">
                            <strong class="card-title">Details</strong>
                            <a class="float-right small text-muted" href="#!">View all</a>
                        </div>
                        <div class="card-body" data-simplebar="init" style="height:490px; overflow-y: auto; overflow-x: hidden;">
                            <div class="simplebar-wrapper" style="margin: -20px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 20px;">
                                                <div class="list-group list-group-flush my-n3">
                                                    <div class="list-group-item">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <input type="checkbox" class="custom-control-input-1">
                                                            </div>
                                                            <div class="col">
                                                                <small><strong>Select All</strong></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <input type="checkbox" class="custom-control-input-1">
                                                            </div>
                                                            <div class="col">
                                                                <small><strong>Adamawa</strong></small>
                                                                <div class="my-0 text-muted small">
                                                                    <span class="badge badge-light text-muted mr-2">10%</span>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <input type="text" class="custom-control-input-1" style="width: 100%;background:inherit;">
                                                            </div>
                                                            <div class="col-auto pr-0">
                                                                <small><strong>1,345,000</strong></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: 360px; height: 1262px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar" style="height: 99px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                            </div>
                        </div> <!-- / .card-body -->
                    </div> <!-- / .card -->
                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow mb-4">
                            <div class="card-header shadow">
                                <strong class="card-title">Projected Votes</strong>
                            </div>
                            <div class="card-body">
                                <div class="chart-widget mb-2">
                                    <div id="radialbar-1"></div>
                                </div>
                                <div class="row items-align-center">
                                    <div class="col-4 text-center">
                                        <p class="text-muted mb-1">Your Votes</p>
                                        <h6 class="mb-1">0</h6>
                                    </div>
                                    <div class="col-4 text-center">
                                        <p class="text-muted mb-1">States</p>
                                        <h6 class="mb-1">0</h6>
                                    </div>
                                    <div class="col-4 text-center">
                                        <p class="text-muted mb-1">LGA</p>
                                        <h6 class="mb-1">0</h6>
                                    </div>
                                </div>
                            </div> <!-- .card-body -->
                        </div> <!-- .card -->
                    </div>
                    <!--/end 12-->
                    <div class="col-md-12">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong>Distribution</strong>
                            </div>
                            <div class="card-body">
                                <div id="pieChartWidget-11"></div>
                            </div> <!-- card-body -->
                        </div> <!-- .card -->
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong>Region</strong>
                    </div>
                    <div class="card-body">
                        <div class="map-box" style="position: relative; width: 320px; min-height: 130px;">
                            <div id="dataMapNigeria"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection