@extends('layouts.app')

@section('content')
<div class="container py-5 mb-5 gradient-custom " style="height: 600px">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card card bg-dark text-white shadow-2-strong card-registration" style="border-radius: 1rem;">
                <div class="card-header text-center" style="font-size: 25px;">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Username" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <a href="/login" class="btn btn-link">Already have an account?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <section class="gradient-custom">
  <div class="container h-100 py-2">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card bg-dark text-white shadow-2-strong card-registration" style="border-radius: 1rem;">
          <div class="card-body p-4 p-md-5 bg-dark">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-uppercase">Sign Up</h3>
            <p class="text-white-50 mb-5">Your register form is here</p>
            <form action="{{route('register')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <span class="text-danger">@error('fname') {{$message}} @enderror</span>
                            <input type="text" id="firstName" name="fname" class="form-control form-control-lg" placeholder="First Name" value="{{old('fname')}}"/>
                            <label class="form-label" for="firstName" >First Name</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <span class="text-danger">@error('lname') {{$message}} @enderror</span>
                            <input type="text" id="lastName" name="lname" class="form-control form-control-lg" placeholder="Last Name" value="{{old('lname')}}"/>
                            <label class="form-label" for="lastName" >Last Name</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <span class="text-danger">@error('username') {{$message}} @enderror</span>
                            <input type="text" id="userName" name="name" class="form-control form-control-lg" placeholder="Username"/>
                            <label class="form-label" for="Username" >Username</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <span class="text-danger">@error('sign') {{$message}} @enderror</span>
                        <select class="select form-control-lg" name="blood" value="{{old('blood')}}">
                            <option value="none">Choose your blood type</option>
                            <option value="A">Type A</option>
                            <option value="B"> Type B</option>
                            <option value="AB"> Type AB</option>
                            <option value="O"> Type O</option>
                        </select>
                        <label class="form-label select-label">Choose ur Blood</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline datepicker w-100">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                            <input type="text" name="email" class="form-control form-control-lg" id="email" placeholder="Email"/>
                            <label for="email" class="form-label" >Email</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <span class="text-danger">@error('sex') {{$message}} @enderror</span>
                        <h6 class="mb-2 pb-1">Gender: </h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="femaleGender"
                        value="Female" checked />
                        <label class="form-check-label" for="femaleGender">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="maleGender"
                        value="Male" />
                        <label class="form-check-label" for="maleGender">Female</label>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                            <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password"/>
                            <label class="form-label" for="password" >Password</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                            <span class="text-danger">@error('confirm_password') {{$message}} @enderror</span>
                            <input type="password" name="confirm_password" id="re-password" class="form-control form-control-lg" placeholder="Confirm Password"/>
                            <label class="form-label" for="re-password" placeholder="Confirm Password">Confirm Password</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <span class="text-danger">@error('sign') {{$message}} @enderror</span>
                        <label class="form-label select-label">Choose ur Sign</label>
                        <select class="select form-control-lg" name="sign" value="{{old('sign')}}">
                            <option value="none">Choose your sign</option>
                            <option value="Aries">Aries</option>
                            <option value="Taurus">Taurus</option>
                            <option value="Gemini">Gemini</option>
                            <option value="Cancer">Cancer</option>
                            <option value="Leo">Leo</option>
                            <option value="Virgo">Virgo</option>
                            <option value="Libra">Libra</option>
                            <option value="Scorpio">Scorpio</option>
                            <option value="Sagittarius">Sagittarius</option>
                            <option value="Capricorn">Capricorn</option>
                            <option value="Aquarius">Aquarius</option>
                            <option value="Pisces">Pisces</option>
                        </select>
                    </div>
                </div>
                <div class="mt-4 pt-2 text-center">
                    <!-- <input class="btn btn-primary btn-lg" type="submit" value="Sign Up" />
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                </div> <br>
                <div class="mb-5 text-center">
                    <p class="mb-0">Already have an account? <a href="/login" class="text-teal-50 fw-bold">Sign In</a></p> 
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
@endsection
