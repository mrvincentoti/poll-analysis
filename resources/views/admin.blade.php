@extends('layouts.app')

@section('content')

<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">Add State</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('admin.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Name</label>
                                        <input type="text" id="simpleinput" class="form-control" name="location_name">
                                        <input type="hidden" name="action" value="location">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-email">summary</label>
                                        <textarea class="form-control" id="example-textarea" name="summary" rows="4"></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-password">Total Count</label>
                                        <input type="number" id="example-password" class="form-control" value="Number" name="total">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-password">Positive</label>
                                        <input type="number" id="example-password" class="form-control" value="Number" name="positive">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-password">Negative</label>
                                        <input type="number" id="example-password" class="form-control" value="Number" name="negative">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-password">Neutral</label>
                                        <input type="number" id="example-password" class="form-control" value="Number" name="neutral">
                                    </div>
                                    <button type="submit" class="btn mb-2 btn-primary"><span class="fe fe-arrow-right fe-16 mr-2"></span>Submit</button>
                                </form>

                            </div> <!-- /.col -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">Add Region</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('admin.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input type="hidden" name="action" value="region">
                                        <label for="simpleinput">State</label>
                                        <select class="form-control" id="example-select" name="location_id">
                                            @foreach($locations as $location):
                                            <option value="{{$location->id}}">{{ $location->location_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-email">North Central</label>
                                        <input type="text" id="example-email" name="nc" class="form-control" placeholder="[positive,negative,neutral]30,30,0">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-email">North West</label>
                                        <input type="text" id="example-email" name="nw" class="form-control" placeholder="[positive,negative,neutral]30,30,0">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-email">South South</label>
                                        <input type="text" id="example-email" name="ss" class="form-control" placeholder="[positive,negative,neutral]30,30,0">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-email">North East</label>
                                        <input type="text" id="example-email" name="ne" class="form-control" placeholder="[positive,negative,neutral]30,30,0">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-email">South East</label>
                                        <input type="text" id="example-email" name="se" class="form-control" placeholder="[positive,negative,neutral]30,30,0">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-email">South West</label>
                                        <input type="text" id="example-email" name="sw" class="form-control" placeholder="[positive,negative,neutral]30,30,0">
                                    </div>

                                    <button type="submit" class="btn mb-2 btn-primary"><span class="fe fe-arrow-right fe-16 mr-2"></span>Submit</button>
                                </form>

                            </div> <!-- /.col -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">Add Comment</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('admin.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="action" value="comment">
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">State</label>
                                        <select class="form-control" id="example-select" name="location_id">
                                            @foreach($locations as $location):
                                            <option value="{{$location->id}}">{{ $location->location_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-email">Username</label>
                                        <input type="text" id="example-email" name="username" class="form-control" placeholder="@username">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-email">summary</label>
                                        <textarea class="form-control" id="example-textarea" name="comment" rows="4"></textarea>
                                    </div>
                                    <button type="submit" class="btn mb-2 btn-primary"><span class="fe fe-arrow-right fe-16 mr-2"></span>Submit</button>
                                </form>

                            </div> <!-- /.col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection