@extends('layouts.app')
@section('content')
<section class="banner bg-light">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner mb-10">
            <div class="carousel-item active" data-interval="10000">
                <img src="{{Voyager::image(setting('slider.slider-1'))}}" class="d-block w-100" style="height: 800px" alt="...">
                <div class="carousel-caption d-none d-md-block">
            </div>
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="{{Voyager::image(setting('slider.slider-2'))}}" class="d-block w-100" style="height: 800px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{Voyager::image(setting('slider.slider-3'))}}" class="d-block w-100" style="height: 800px" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section class="section py-4" style="background-color: #0001; alight-items: center;">
    <div class="container" >
        <div class="row">
            <div class="col-12 d-flex justify-content-center flex-wrap text-black-50" style="gap: 40px ; ">
                <a href="/man" title="Man" style="text-decoration: none;  ">
                    <div class="icon_box  icon-dept text-center ">
                        <img alt="Man" class="d-block m-auto " width="70" height="70"  src="{{Voyager::image(setting('common.link_man'))}}">
                        <label class="pt-2 text-uppercase">Man</label>
                    </div>
                </a>
                <a href="/woman" title="Woman">
                    <div class="icon_box  icon-dept text-center ">
                        <img alt="Man" class="d-block m-auto" width="70" height="70" src="{{Voyager::image(setting('common.link_woman'))}}">
                        <label class="pt-2 text-uppercase">Woman</label>
                    </div>
                </a>
                <a href="/children" title="Children">
                    <div class="icon_box  icon-dept text-center ">
                        <img alt="Children" class="d-block m-auto" width="70" height="70" src="{{Voyager::image(setting('common.link_children'))}}">
                        <label class="pt-2 text-uppercase">Children</label>
                    </div>
                </a>
                <a href="/elder" title="Elder">
                    <div class="icon_box  icon-dept text-center ">
                        <img alt="Old" class="d-block m-auto" width="70" height="70" src="{{Voyager::image(setting('common.link_elder'))}}">
                        <label class="pt-2 text-uppercase">Elder</label>
                    </div>
                </a>                      
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container Shortcut">
    <h4 class="text-center my-3"><strong></strong></h4>
    <div class="row shadow pb-5">
        <div class="col-lg-6 col-md-12 col-sm-12 py-4 inner">
                    <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                        <a href="/disease">
                            <img src="{{Voyager::image(setting('shortcut.disease_homepage'))}}" style="width: 100%; height: 350px" />
                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                                <div class=" d-flex  justify-content-center align-items-center h-100">
                                    <h2 style="text-align: center; background: cover; color: white"><span class="badge">Disease</span></h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 py-4 inner">
                    <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                        <a href="/body">
                            <img src="{{Voyager::image(setting('shortcut.body_homepage'))}}" style="width: 100%; height: 350px" />
                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                                <div class=" d-flex  justify-content-center align-items-center h-100">
                                    <h2 style="text-align: center; background: cover; color: white"><span class="badge">Category</span></h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 py-4 inner">
                    <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                        <a href="/anatomy">
                            <img src="{{Voyager::image(setting('shortcut.anatomy_homepage'))}}" style="width: 100%; height: 350px" />
                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                                <div class=" d-flex  justify-content-center align-items-center h-100">
                                    <h2 style="text-align: center; background: cover; color: white"><span class="badge">Anatomy</span></h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 py-4 inner">
                    <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                        <a href="/symptom">
                            <img src="{{Voyager::image(setting('shortcut.symptom_homepage'))}}" style="width: 100%; height: 350px" />
                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                                <div class=" d-flex  justify-content-center align-items-center h-100">
                                    <h2 style="text-align: center; background: cover; color: white"><span class="badge">Symptom</span></h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
        </div>
    </div>
</section>

<section class="d-flex justify-content-center bg-info">

    @if(!Auth::check())
        <div class="py-2">
        <h1>Want to explore more....</h1>
            <h3 style="text-align: center;">Sign Up here</h3>
            <center>
                <a href="/register"><h4 class="btn btn-primary text-uppercase" style="text-align: center">Sign Up</h4></a>
                
            </center>
        
        </div>
    @else
        <h3>Welcome, {{Auth::user()->name}}</h3>
    @endif
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
            .icon_box{
                padding: 50px;
            }
            .icon_box:hover{
                color: blue ;
                font-weight: bold;
                background-color:whitesmoke;
                border-radius: 10px;
                border: 1px solid gray;
            }
</style>
@endsection
