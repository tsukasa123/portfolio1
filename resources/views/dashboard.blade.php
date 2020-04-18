@extends('layouts.app')

@section('content')


<div class="card rounded-0" style="width: 100%;">
    
    {{-- @if() --}}
    <img class="card-img-top" src="..." alt="" width="100%" height="200px" style="background-color:gray; position: relative;">
    <img src="#" alt="" width="140px" height="140px" class="rounded-circle" style="background-color:gray; position:absolute; top:120px; left:20px; border: 3px solid white;">

    {{-- @else
    <img class="card-img-top" src="..." alt="" width="100%" height="200px" style="background-color:black;">
    @endif --}}

    <div class="card-body mt-2">
        <div class="d-flex justify-content-end">
            <a href="" class="btn btn-outline-primary btn-md rounded-pill">Settings</a>
        </div>
        
        <h4 class="card-title font-weight-bold m-0">{{ Auth::user()->name }} <br>
            <small class="text-muted">@account_name</small></h4>
        <p class="m-0 py-1">here's introduction</p>
        <p class="m-0"><i class="far fa-calendar-alt"></i> {{ Auth::user()->created_at }}</p>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-white border-left border-right">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Features</a>
            <a class="nav-item nav-link" href="#">Pricing</a>
            <a class="nav-item nav-link" href="#">Disabled</a>
        </div>
    </div>
</nav>





@if(Auth::check())
@foreach($posts as $post)
<div class="card rounded-0">
    <div class="card-body d-flex p-1">
        <div class="col-md-1">
            <img src="#" alt="IMG" class="rounded-circle" width="50px" height="50px">
        </div>
        <div class="col-md-11">
            <div class="d-flex justfy-content-between">
                <h5 class="pr-2">Name</h5>
                <h5 class="text-muted pr-2">Account Name</h5>
                <h5 class="text-muted">{{ $post->created_at->diffForHumans() }}</h5>
            </div>
            <p>{{ $post->description }}</p>
            <img src="{{ asset('storage/'.$post->featured_image) }}" alt="Image" width="100%" class="rounded-lg">
            <div class="d-flex">
                <div class="col-3"><i class="far fa-comment"></i></div>
                <div class="col-3"><i class="fas fa-retweet"></i></div>
                <div class="col-3"><i class="far fa-heart"></i></div>
                <div class="col-3"><i class="fas fa-download"></i></div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif

@endsection
