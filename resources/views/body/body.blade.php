@extends('layouts.app')
@section('content')
<section class="container">
<div class="col-12 container py-3 d-flex justify-content-between">
        <h5 class="section-h5">Category by Body</h5>
        <a href="/body" class="d-flex">
            <span class="rps-show-hide see-more-text">See more</span>
            <i class="fa fa-angle-right pl-2 pt-1"></i>
        </a>
    </div>
    <div class="col-12">
        <hr class="mt-0 mb-4">
    </div>
    <div class="container Shortcut">
        <h4 class="text-center my-3"><strong>Looking for...</strong></h4>
        <div class="row shadow pb-5">
            @foreach($bodies as $item)
            <div class="col-lg-6 col-md-12 col-sm-12 py-4 inner">
                <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                    <a href="/body/{!!$item['name']!!}" title="">
                        <img src="{{Voyager::image($item['image'])}}" style="width: 100%; height: 350px; margin-top: -50px" />
                        <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                            <div class=" d-flex  justify-content-center align-items-center h-100">
                                <h2 style="text-align: center; background: cover; color: white"><span class="badge">{{$item['name']}}</span></h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<style>
    .shortcut{
        display:flex;
        justify-content: center;
    }
    .inner .bg-image{
                position: relative;
                overflow: hidden;
                background-repeat: no-repeat;
                background-size: cover;
                transition: all 0.5s ease;
            }
            .inner .bg-image:hover{
                position: relative;
                background-repeat: no-repeat;
                background-size: cover;
                transform: scale(1.1);
            }
            .bg-image .mask{
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 100%;
                overflow: hidden;
                color:#1b1b1b;
                align-self: center;
                justify-content: center;
            }

            .bg-image .mask .text{
                height: 100%;
                left: 50%;
                right: 50%;
                top: 50%;
                bottom: 50%;
                display: flex!important;
                align-items: center!important;
                justify-content: center!important;
                font-family: 'Ubuntu', sans-serif;
            }
</style>
@endsection
