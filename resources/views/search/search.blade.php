@extends('layouts.app')
@section('content')
<div class="container py-5">
    <h2 class="text-center">What disease are you looking for?</h2>
    <br>
    <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-2" method="get" action="{{ url('/search')}}">
        <input class="form-control form-control-sm mr-3 w-50" style="height: 50px" name="search" type="text" placeholder="Search by name or body part..." aria-label="Search" required/>
    </form>
</div><hr>
      @if($data->isNotEmpty())
        <h4 class="container result">Search found for <span style="color: green">{!!$search!!}</span>: {{$data->count() }} items<br><br></h4>
            <section style="background-color: #eee;">
                <div class="container py-5">
                    @foreach($data as $item)
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                            <img src="{{Voyager::image($item->image)}}" class="w-100" />
                                            <a href="#!">
                                                <div class="hover-overlay">
                                                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <h5>{{$item->name}}</h5>
                                        <div class="mt-1 mb-0 text-muted small">
                                            <span><i class="fas fa-user text-primary"></i> {{$item->type}}</span><span class="text-primary"> • <i class="fas fa-clock"></i></span> {{$item->duration}}<br /></span>
                                        </div>
                                        <div class="mb-2 text-muted big">
                                            <span>{{$item->body}}</span><br /></span>
                                        </div>
                                        <p class="text-truncate mb-4 mb-md-0">{{$item->title}}</p>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                        <div class="d-flex flex-row mt-4 align-items-center justify-content-center">
                                            <a href="/disease/{{$item['id']}}"><button class="btn btn-primary btn-lg mx-3" type="button">Details</button></a>
                                            <a href="/favorite"><button class="btn btn-outline-danger mx-3" type="submit"><i class="fas fa-heart fa-2x"></i></button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @else
            <div class="vh-100">
                <h4 class="result container">Search not found for <span style="color: red">{!!$search!!}</span>: {{$data->count()}} items</h4>
            </div>
        @endif


@endsection
