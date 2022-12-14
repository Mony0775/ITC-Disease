
@extends('layouts.app')
@section('content')
<nav aria-label="breadcrumb"
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item"><a href="/body">Category</a></li>
    <li class="breadcrumb-item active" aria-current="page">List</li>
  </ol>
</nav>
<section class="container bg-white-50 gradient-custom" style="padding-bottom: 400px;">
    <div class="title">
        <h4 class="text-center py-3 text-uppercase text-primary"><strong>Common Disease: </strong></h4>
        <hr class="text-center" style="width: 60px; background-color: #7c4dff; height: 2px;"/>
    </div>
    <div class="container d-flex" style="max-width: 1400px">
        <div class="col-sm-12 left" style="width: 80%">
            <div class="row">
            @foreach($bodies as $item)
                <!-- col 12 it men item has 1 small, col-md-6 iem has 2 medium, col-lg-4 has 3 item -->
                <div class="col-12 col-md-6 col-lg-4 py-3">
                    <div class="card shadow" style="margin-top: -15px">
                        <a href="/disease/{{$item['id']}}" style="position: relative">
                            <img src="{{Voyager::image($item->image)}}" alt="" class="card-img-top" width="100%" height="350" style="margin-top: -20px"/>
                            <h5 class="card-title text-primary py-1">{{Illuminate\Support\Str::of($item['name'])->words(10)}}</h5>
                        </a>
                        <div class="d-flex justify-content-end " >
                            <button class="btn btn-outline-danger" style="position: absolute; top:10px; right: 10px" type="submit"><i class="fas fa-heart"></i></button>
                            </div>
                        <div class="more_info pt-1 pb-3 pl-2">
                            <p class="text-primary text-truncate">{!!$item['title']!!}</p>
                            <div class="kind"> <i class="fas fa-user"></i> {!!$item['type']!!}</div>
                            <div class="duration"> <i class="fas fa-clock"></i> {!!$item['duration']!!}</div>
                            <div class="category"> <i class="fas fa-temperature-arrow-up"></i> {!!$item['body']!!}</div>
                        </div>
                    </div>
                </div>
            @endforeach 
            
            </div>
            <div class="py-3">{!! $bodies->links() !!}</div>
    </div>
    </div>
</section>
@endsection
