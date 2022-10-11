@extends('layouts.app')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center mb-2">
                    <div class="col">
                        <h2 class="h5 page-title">Welcome!</h2>
                    </div>
                    <div class="col-auto">
                        <form class="form-inline">
                            <div class="form-group d-none d-lg-inline">
                                <label for="reportrange" class="sr-only">Date Ranges</label>
                                <div id="reportrange" class="px-2 py-2 text-muted">
                                    <span class="small"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                                <button type="button" class="btn btn-sm mr-2"><span class="fe fe-filter fe-16 text-muted"></span></button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <!-- Recent Activity -->
                    <div class="col-md-12 col-lg-4 mb-4">
                        <div class="card timeline shadow">
                            <div class="card-header">
                                <strong class="card-title">Influencers - Today</strong>
                            </div>
                            <div class="card-body" data-simplebar style="height:355px; overflow-y: auto; overflow-x: hidden;">
                                <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-2">
                                                <a href="profile-posts.html" class="avatar avatar-sm">
                                                    <img src="{{asset('assets/images/atiku.jpg')}}" alt="..." class="avatar-img rounded-circle">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <p class="small mb-0"><strong>Atiku Abubakar</strong></p>
                                                <small>
                                                    <a href="profile-posts.html" class="avatar avatar-sm">
                                                        <img src="{{asset('assets/images/pdp.png')}}" alt="..." class="avatar-img rounded-circle">
                                                    </a>
                                                </small>
                                            </div>
                                            <div class="col-6">
                                                <h3 class="card-title mb-0 text-right counter-count">1107</h3>
                                                <p class="small text-muted mb-0 text-right">
                                                    <span class="fe fe-arrow-up fe-12 text-success"></span>
                                                    <span>+0.9%</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-2">
                                                <a href="profile-posts.html" class="avatar avatar-sm">
                                                    <img src="{{asset('assets/images/obi.jpg')}}" alt="..." class="avatar-img rounded-circle">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <p class="small mb-0"><strong>Peter Obi</strong></p>
                                                <small>
                                                    <a href="profile-posts.html" class="avatar avatar-sm">
                                                        <img src="{{asset('assets/images/lp.jpg')}}" alt="..." class="avatar-img rounded-circle">
                                                    </a>
                                                </small>
                                            </div>
                                            <div class="col-6">
                                                <h3 class="card-title mb-0 text-right counter-count">1497</h3>
                                                <p class="small text-muted mb-0 text-right">
                                                    <span class="fe fe-arrow-down fe-12 text-danger"></span>
                                                    <span>-2.9%</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-2">
                                                <a href="profile-posts.html" class="avatar avatar-sm">
                                                    <img src="{{asset('assets/images/tinubu.jpg')}}" alt="..." class="avatar-img rounded-circle">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <p class="small mb-0"><strong>Bola Tinubu</strong></p>
                                                <small>
                                                    <a href="profile-posts.html" class="avatar avatar-sm">
                                                        <img src="{{asset('assets/images/apc.jpg')}}" alt="..." class="avatar-img rounded-circle">
                                                    </a>
                                                </small>
                                            </div>
                                            <div class="col-6">
                                                <h3 class="card-title mb-0 text-right counter-count">909</h3>
                                                <p class="small text-muted mb-0 text-right">
                                                    <span class="fe fe-arrow-up fe-12 text-success"></span>
                                                    <span>+1.9%</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- / .list-group -->
                            </div> <!-- / .card-body -->
                        </div> <!-- / .card -->
                    </div> <!-- / .col-md-6 -->
                    <!-- Striped rows -->
                    <div class="col-md-12 col-lg-4">
                        <div class="card shadow">
                            <div class="card-header">
                                <strong class="card-title">Competition</strong>
                            </div>
                            <div class="card-body my-n2">
                                <!--div id="sentimentByCandidateChart" style="height: 332px;"></div-->
                                <div id="sentimentByCandidateChart-2" style="height: 332px;"></div>
                            </div>
                        </div>
                    </div> <!-- Striped rows -->
                    <div class="col-md-12 col-lg-4">
                        <div class="card shadow">
                            <div class="card-header">
                                <strong class="card-title">Geographic</strong>
                            </div>
                            <div class="card-body my-n2">
                                <!--div id="sentimentByCandidateChart" style="height: 332px;"></div-->
                                <div id="geographic-map" style="height: 332px;"></div>
                            </div>
                        </div>
                    </div> <!-- Striped rows -->
                </div> <!-- .row-->

                <div class="row items-align-baseline">
                    <div class="col-md-12 col-lg-3">
                        <div class="card shadow eq-card timeline">
                            <div class="card-header">
                                <strong class="card-title">Tweets</strong>
                                <a class="float-right small text-muted" href="#!">View all</a>
                            </div>
                            <div class="card-body" data-simplebar="init" style="height: 360px; overflow-y: auto; overflow-x: hidden;">
                                <div class="simplebar-wrapper" style="margin: -20px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 20px;">
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small"><strong>@Brown Asher</strong><span class="text-muted mx-2">Just create new layout Index, form, table</span><strong>Tiny Admin</strong></div>
                                                            <p class="small text-muted">Creative Design <span class="badge badge-light">1h ago</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-warning">
                                                        <div class="pl-5">
                                                            <div class="mb-3 small"><strong>@Fletcher Everett</strong><span class="text-muted mx-2">created new group for</span><strong>Tiny Admin</strong></div>
                                                            <ul class="avatars-list mb-2">
                                                                <li>
                                                                    <a href="#!" class="avatar avatar-sm">
                                                                        <img alt="..." class="avatar-img rounded-circle" src="./assets/avatars/face-1.jpg">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#!" class="avatar avatar-sm">
                                                                        <img alt="..." class="avatar-img rounded-circle" src="./assets/avatars/face-4.jpg">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#!" class="avatar avatar-sm">
                                                                        <img alt="..." class="avatar-img rounded-circle" src="./assets/avatars/face-3.jpg">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <p class="small text-muted">Front-End Development <span class="badge badge-light">1h ago</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-success">
                                                        <div class="pl-5">
                                                            <div class="mb-2 small"><strong>@Kelley Sonya</strong><span class="text-muted mx-2">has commented on</span><strong>Advanced table</strong></div>
                                                            <div class="card d-inline-flex mb-2">
                                                                <div class="card-body bg-light small py-2 px-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
                                                            </div>
                                                            <p class="small text-muted">Back-End Development <span class="badge badge-light">1h ago</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 360px; height: 448px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="height: 346px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                                </div>
                            </div> <!-- / .card-body -->
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="card shadow eq-card mb-4">
                            <div class="card-header">
                                <strong class="card-title">Most popular hasgtag</strong>
                            </div>
                            <div class="card-body">
                                <div id="mostPopularHashtag"></div>
                            </div> <!-- .card-body -->
                        </div> <!-- .card -->
                    </div> <!-- .col -->
                    <div class="col-md-12 col-lg-5">
                        <div class="card shadow eq-card mb-4">
                            <div class="card-header">
                                <strong class="card-title">Daily tweets( Past 7 days)</strong>
                            </div>
                            <div class="card-body">
                                <div class="chart-widget mb-2">
                                    <div id="dailyTweet"></div>
                                </div>
                            </div> <!-- .card-body -->
                        </div> <!-- .card -->
                    </div> <!-- .col -->
                </div> <!-- .row -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

</main> <!-- main -->
@endsection