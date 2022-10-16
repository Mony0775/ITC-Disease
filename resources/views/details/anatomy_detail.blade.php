@extends('layouts.app')
@section('content')
<nav aria-label="breadcrumb"
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item"><a href="/anatomy">Anatomy</a></li>
    <li class="breadcrumb-item active" aria-current="page">{!! $anatomy['name'] !!}</li>
  </ol>
</nav>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 px-2 py-5">
                <img src="{{Voyager::image($anatomy->image)}}" alt="" width="70%" height="400px">
            </div>
            <div class="col-sm-12 px-2">
                <h2 class="text-primary">{!! $anatomy['name'] !!}</h2>
            </div>
            <div class="col-sm-12 py-2">
                <p>{!! $anatomy['description'] !!}</p>
            </div>
        </div>
    </div>
</section>

@endsection
