@extends('layouts.app')

@section('content')
<section class="py-5 d-flex justify-content-center">
<div class="profile-card">
      <div class="top-section">
        <div class="pic">
          <img src="{{Voyager::image(auth()->user()->avatar)}}" alt="">
        </div>
        <div class="name">{{auth()->user()->name}}</div>
        <div class="tag text-light">{{auth()->user()->email}}</div>
      </div>
    </div>
</section>
<style>
    *{
  margin: 0;
  padding: 0;
  font-family: "Open Sans",sans-serif;
  box-sizing: border-box;
  text-decoration: none;
}

body{
  background: url(bg.jpg) no-repeat center;
  background-size: cover;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

.profile-card{
  width: 420px;
  overflow: hidden;
  text-align: center;
  position: relative;
  box-shadow: 0 0 10px #00000070;
}

.top-section{
  padding: 60px 40px;
  background: #1b1b1b;
}

.message,.notif{
  position: absolute;
  top: 40px;
  font-size: 20px;
  cursor: pointer;
  color: #ffffff50;
}

.message{
  right: 40px;
}

.notif{
  left: 40px;
}

.pic{
  width: 150px;
  height: 150px;
  margin: auto;
  margin-bottom: 20px;
  border: 2px solid #FF6D51;
  border-radius: 50%;
  padding: 8px;
  position: relative;
}

.pic:after{
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  border: 1px solid #FF6D51;
  left: 0;
  top: 0;
  box-sizing: border-box;
  border-radius: 50%;
  animation: wave 1.5s infinite linear;
}

@keyframes wave {
  to{
    transform: scale(1.5);
    opacity: 0;
  }
}

.pic img{
  width: 100%;
  height: 100%;
  border-radius: 50%;
}

.name{
  color: #f1f1f1;
  font-size: 28px;
  letter-spacing: 2px;
  text-transform: uppercase;
}

.tag{
  font-size: 18px;
  color: #222;
}

.bottom-section{
  background: #f1f1f1;
  padding: 60px 40px;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 28px;
  text-transform: uppercase;
}

.border{
  width: 1px;
  height: 20px;
  background: #bbb;
  margin: 0 30px;
}

.bottom-section span{
  font-size: 14px;
  display: block;
}

.social-media{
  position: absolute;
  width: 100%;
  top: -30px;
  left: 0;
  z-index: 1;
}

.social-media i{
  width: 60px;
  height: 60px;
  background: #FF6D51;
  border-radius: 50%;
  color: #f1f1f1;
  font-size: 20px;
  line-height: 60px !important;
  margin: 0 10px;
  position: relative;
}

.social-media i:after{
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  background: #FF6D51;
  left: 0;
  top: 0;
  box-sizing: border-box;
  border-radius: 50%;
  z-index: -1;
  transition: 0.4s linear;
}

.social-media i:hover:after{
  transform: scale(1.4);
  opacity: 0;
}
</style>
@endsection