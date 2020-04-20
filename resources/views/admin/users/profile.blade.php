@extends('layouts.app')

@section('content')

<div class="card">

    <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="card-header bg-white">
            <div class="d-flex justify-content-between">
                <h4 class="mb-0 mt-2">Settings</h4>
                <button type="submit" class="btn btn-primary rounded-pill">Save</button>
            </div>
        </div>

        
        <div class="card-body">
            <div class="form-group row">
                <img class="card-img-top" src="{{ asset('storage/'.$user->profile->background_image) }}" alt="" width="100%" height="200px" style="background-color:gray; position: relative;">
                <label for="background_img">
                    <i class="far fa-image pr-2" style="font-size:1.3rem; position:absolute; top: 175px; left:250px; color:white;"></i>
                    <input type="file" name="background_img" id="background_img">
                </label>
            </div>
            <div class="form-group">
                <img src="{{ asset('storage/'.$user->profile->avatar) }}" alt="" width="140px" height="140px" class="rounded-circle" style="background-color:gray; position:absolute; top:200px; left:20px; border: 3px solid white;">
                <label for="avatar">
                    <i class="fas fa-camera" style="font-size:1.3rem; position:absolute; top:260px; left:80px; color:white;"></i>
                    <input type="file" name="avatar" id="avatar">
                </label>
            </div>
            <div class="form-group mt-4">
                <label for="name">User Name</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>
            <div class="form-group mt-3">
                <label for="introduction">Introduction</label>
                <input type="text" name="introduction" class="form-control" value="{{ $user->profile->introduction }}">
            </div>
        </div>
    </form>

</div>

@stop