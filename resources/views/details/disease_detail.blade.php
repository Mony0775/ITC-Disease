@extends('layouts.app')
@section('content')
<section class="news detail">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 px-2 py-5">
                <img src="{{Voyager::image($disease->image)}}" alt="" width="100%" height="500px">
            </div>
            <div class="col-sm-12 px-2">
                <h2 class="text-primary">{!! $disease['name'] !!}</h2>
                    <div class="more_info pt-1 pb-3 pl-2">
                        <p class="text-truncate" style="color: green">{!!$disease['title']!!}</p>
                        <div class="kind"> <i class="fas fa-user"></i> {!!$disease['type']!!}</div>
                        <div class="duration"> <i class="fas fa-clock"></i> {!!$disease['duration']!!}</div>
                        <div class="category"> <i class="fas fa-temperature-arrow-up"></i> {!!$disease['body']!!}</div>
                    </div>
                <p class="px-2"><i class="fas fa-calendar-alt"></i> {{$disease['created_at']}}</p>
            </div>
            <div class="col-sm-12 py-2 text-bold bg-light">
                <p style="color: white">{!! $disease['description'] !!}</p>
            </div>
            <div class="col-sm-12 py-2">
                <h5 class="px-2 text-uppercase" style="color: orange">Symptom</h5>
                <p>{!! $disease['symptom'] !!}</p>
            </div>
            <div class="col-sm-12 py-2">
                <h5 class="px-2 text-uppercase" style="color: green">Treatment</h5>
                <p>{!! $disease['treatment'] !!}</p>
            </div>
            <div class="col-sm-12 py-2">
                <h5 class="text-uppercase px-2" style="color: red">diagnosis</h5>
                <p>{!! $disease['dianosis'] !!}</p>
            </div>
            <div class="col-sm-12 py-2">
                <h5 class="text-uppercase py-2 pb-4" style="color: Dark Blue">Reference Document</h5>
                <a href="https://en.wikipedia.org/wiki/{!! $disease['name'] !!}">https://www.wikipedia.org/{!! $disease['name'] !!}</a>

            </div>
        </div>
    </div>
</section>
@endsection
