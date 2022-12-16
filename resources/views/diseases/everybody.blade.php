@extends('layouts.app')
@section('content')
<nav aria-label="breadcrumb"
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item"><a href="/disease">Disease</a></li>
    <li class="breadcrumb-item active" aria-current="page">Everybody</li>
  </ol>
</nav>
<section class="container bg-white-50 gradient-custom">
<div class="title">
    <h4 class="text-center py-3 text-uppercase text-primary"><strong>Common Disease for Everybody: </strong></h4>
    <hr class="text-center" style="width: 60px; background-color: #7c4dff; height: 2px;"/>
</div>
<div class="container d-flex" style="max-width: 1400px">
    <div class="col-sm-12 left" style="width: 80%">
        <div class="row">
        @foreach($everybody as $item)
            <!-- col 12 it men item has 1 small, col-md-6 iem has 2 medium, col-lg-4 has 3 item -->
            <div class="col-12 col-md-6 col-lg-4 py-3">
                <div class="card shadow  disease_data" style="margin-top: -15px">
                    <a href="/disease/{{$item['id']}}" style="position: relative">
                        <img src="{{Voyager::image($item->image)}}" alt="" class="card-img-top" width="100%" height="350" style="margin-top: -20px"/>
                        <h5 class="card-title text-primary py-1">{{Illuminate\Support\Str::of($item['name'])->words(10)}}</h5>
                    </a>
                        <div class="d-flex justify-content-end" >
                            <input type="hidden" value="{{$item->id}}" class="diseaseid">
                            <button class="btn btn-outline-danger addToFavBtn" style="position: absolute; top:10px; right: 10px" type="submit"><i class="fas fa-heart"></i></button> 
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
        <div class="py-3">{!! $everybody->links() !!}</div>
   </div>
</div>
</section>

<script type="text/javascript">
    $(document).ready(function(){
        $('.addToFavBtn').click(function (e) { 
            e.preventDefault();
            var disease_id = $(this).closest('.disease_data').find('.diseaseid').val();
            alert(disease_id);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: 'POST',
                url: "/addfavorite",
                data: {
                    'disease_id': disease_id,
                },
                dataType: "dataType",
                success: function (response) {
                    alert(response.status);
                }
            });
        });
    });
</script>
@endsection

