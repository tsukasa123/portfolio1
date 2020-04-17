@extends('layouts.app')

@section('content')
<div class="col-md-6">
    <div class="card rounded-lg">
        <div class="card-header d-flex justify-content-between bg-white">
            <h4 class="m-0">Home</h4>
            <a href="#"><i class="far fa-star"></i></a>
        </div>


        <form action="" method="post" enctype="multipart/form-data">

            <div class="card-body d-flex p-1">
                <div class="col-md-1">
                    <img src="" alt="IMAGE" class="rounded-circle" width="50px" height="50px">
                </div>

                <div class="col-md-11">
                    <textarea name="description" cols="30" rows="10" class="form-control" placeholder="What's happened?" style="border: none;"></textarea>
                    <div class="d-flex justify-content-between">
                        <div class="pt-3">
                            <i class="far fa-image pr-2" style="font-size:1.3rem;"></i>
                            <i class="fas fa-photo-video pr-2" style="font-size:1.3rem;"></i>
                            <i class="fas fa-chart-bar pr-2" style="font-size:1.3rem;"></i>
                            <i class="far fa-smile" style="font-size:1.3rem;"></i>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg rounded-pill">Tweet</button>
                    </div>
                </div>
            </div>
            
        </form>


    </div>
</div>

<div class="col-md-3">
    
</div>
@stop