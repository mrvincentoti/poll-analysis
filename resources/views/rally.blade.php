@extends('layouts.app')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 5px;">
                <span style="font-size: 25px; font-weight: bold;">{{strtoupper($location->location_name)}} RALLY ANALYSIS</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card shadow my-bg-white mb-2">
                    <div class="card-header">
                        SUMMARY
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center mb-2">
                            <div class="col">
                                <small class="text-muted mb-1">Total reactions</small>
                                <h3 class="card-title mb-0 my-color-black">{{$location->total}}</h3>
                            </div>
                        </div> <!-- /. row -->
                        <div class="row">
                            <div class="col-4 mb-3">
                                <p class="mb-1 small text-muted my-color-black">Positive</p>
                                <span class="h3 my-color-black">{{$location->positive}}</span><br>
                                <span class="small text-muted my-color-black">{{floor(($location->positive / $location->total) * 100)}}%</span>
                            </div>
                            <div class="col-4 mb-3">
                                <p class="mb-1 small text-muted my-color-black">Negative</p>
                                <span class="h3 my-color-black">{{$location->negative}}</span><br>
                                <span class="small text-muted my-color-black">{{floor(($location->negative / $location->total) * 100)}}%</span>
                            </div>
                            <div class="col-4 mb-3">
                                <p class="mb-1 small text-muted my-color-black">Neutral</p>
                                <span class="h3 my-color-black">{{$location->neutral}}</span><br>
                                <span class="small text-muted my-color-black">{{floor(($location->neutral / $location->total) * 100)}}%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="simplebar-wrapper" style="margin: -20px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 20px;">
                                            @foreach($comments as $comment)
                                            <div class="pb-3 timeline-item item-primary">
                                                <div class="">
                                                    <div class="mb-1 small">
                                                        <strong>{{$comment->username}}
                                                        </strong>
                                                        <span class="text-muted mx-2">
                                                            {{$comment->comment}}
                                                        </span>
                                                    </div>
                                                    <p class="small text-muted"><span class="badge badge-light"></span>
                                                    </p>
                                                </div>
                                                <hr />
                                            </div>
                                            @endforeach
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
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card timeline shadow my-bg-white">
                            <!-- <div class="card-header">
                                <strong class="card-title">Summary</strong>
                            </div> -->
                            <div class="card-body">
                                <h3 class="my-color-black text-center">{{strtoupper($location->location_name)}} RALLY ANALYSIS</h3>
                            </div>
                            <div class="card-body">
                                <p style="font-size: 20px;">
                                    {!! $location->summary !!}
                                </p>
                            </div>
                            <div class="card-body" id="demo-distro">
                                <h3 class="my-color-black text-center">COMMENTS DISTRIBUTION ACROSS REGION</h3>
                            </div>
                            <div class="card-body">
                                <hr style="height:4px;border:none;color:#ccc;background-color:#ccc;" />
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <h3 class="my-color-black text-center">TOTAL COMMENTS</h3>
                                        <div id="total-comments"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="my-color-black text-center">IMPRESSIONS</h3>
                                        <div id="comment-count"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection