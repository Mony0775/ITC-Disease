@extends('layouts.app')
@section('content')
<nav aria-label="breadcrumb"
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Anatomy</li>
  </ol>
</nav>
<section>
    <div class="container Shortcut">
        <h4 class="text-center my-3"><strong>Looking for...</strong></h4>
        <div class="row shadow pb-5">
            @foreach($anatomy as $item)
            <div class="col-lg-6 col-md-12 col-sm-12 py-4 inner">
                <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                    <a href="/anatomy/{!!$item->id!!}">
                        <img src="{{Voyager::image($item['image'])}}" style="width: 100%; height: 400px" />
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
