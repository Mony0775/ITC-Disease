@extends('layouts.app')

@section('content')
<div class="vh-100 container d-flex" style="max-width: 1400px">
    <div class="col-sm-12" style="width: 80%">
    <h4 class="container col-sm-12">Your favorite list:</h4>
    <hr>
        <div class="row">
            <div class="card-body">
                @if($favorite->count() > 0)
                    @foreach($favorite as $item)
                        <img src="{{Voyager::image($item->image)}}" alt="">
                        <p>{{$item->name}}</p>
                    @endforeach
                @else
                    <h4>Your favorite list is empty! Please add your favorites!</h4>
                @endif
            </div>

        </div>
   </div>

</div>
@endsection
