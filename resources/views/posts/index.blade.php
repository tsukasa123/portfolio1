@extends('layouts.app')

@section('content')

    <div class="card rounded-0">
        <div class="card-header d-flex justify-content-between bg-white">
            <h4 class="m-0">Home</h4>
            <a href="#"><i class="far fa-star"></i></a>
        </div>
        <div class="card-body d-flex p-1">
            <div class="col-md-1">
                <img src="" alt="IMAGE" class="rounded-circle" width="50px" height="50px">
            </div>
            <div class="col-md-11">
                <textarea name="" id="" cols="30" rows="1" class="form-control" placeholder="What's happened?" style="border: none;"></textarea>
                <div class="d-flex justify-content-between">
                    <div class="pt-3">
                        <i class="far fa-image pr-2" style="font-size:1.3rem;"></i>
                        <i class="fas fa-photo-video pr-2" style="font-size:1.3rem;"></i>
                        <i class="fas fa-chart-bar pr-2" style="font-size:1.3rem;"></i>
                        <i class="far fa-smile" style="font-size:1.3rem;"></i>
                    </div>
                    <a href="#" class="btn btn-primary btn-lg rounded-pill">Tweet</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card rounded-0 mt-2">
        <div class="card-body d-flex p-1">
            <div class="col-md-1">
                <img src="#" alt="IMG" class="rounded-circle" width="50px" height="50px">
            </div>
            <div class="col-md-11">
                <div class="d-flex justfy-content-between">
                    <h5 class="pr-2">Name</h5>
                    <h5 class="text-muted pr-2">Account Name</h5>
                    <h5 class="text-muted">Update Time</h5>
                </div>
                <p>wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww</p>
                <img src="#" alt="Image" width="100%">
                <div class="d-flex">
                    <div class="col-3"><i class="far fa-comment"></i></div>
                    <div class="col-3"><i class="fas fa-retweet"></i></div>
                    <div class="col-3"><i class="far fa-heart"></i></div>
                    <div class="col-3"><i class="fas fa-download"></i></div>
                </div>
            </div>
        </div>
    </div>






@stop