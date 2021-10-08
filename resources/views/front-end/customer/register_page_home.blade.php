@extends('front-end.master')

@section('title')
    Register
@endsection

@section('main_content')
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>
                        <h3 class="text-danger">{{ Session::get('message') }}</h3>
                        {{ Form::open(['route'=>'customer-login-home','method'=>'POST']) }} 
                        <input type="number" name="emailOrPhone" placeholder="Phone Number" />
                        <span class="text-danger">{{ $errors->has('emailOrPhone')? $errors->first('emailOrPhone'):'' }}</span>
                        <input type="password" name="password" placeholder="Passwod" />
                        <span class="text-danger clearfix">{{ $errors->has('password')? $errors->first('password'):'' }}</span>
                        <span>
                            <input type="checkbox"  class="checkbox"> 
                            Keep me signed in
                        </span>
                        <button type="submit" class="btn btn-default">Login</button>
                    {{ Form::close() }}
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>New Customer Signup!</h2> 
                    <h3 class="text-danger">{{ Session::get('massege') }}</h3>
                        {{ Form::open(['route'=>'customer-register-info-submit','method'=>'POST']) }}
                        <input type="text" name="name" placeholder="Full Name"/>
                        <span class="text-danger">{{ $errors->has('name')? $errors->first('name'):'' }}</span>
                        <input type="email" name="email" placeholder="Email Address"/>
                        <span class="text-danger">{{ $errors->has('email')? $errors->first('email'):'' }}</span>
                        <input type="number" name="phone_number" placeholder="Phone number"/>
                        <span class="text-danger">{{ $errors->has('phone_number')? $errors->first('phone_number'):'' }}</span>
                         
                        <select name="distric" style="margin-bottom:7px;padding:10px;" class="chosen">
                            <option value="">Select your Distric</option> 
                            @foreach ($districts as $district)
                            <option value="{{ $district->id }}">{{ $district->districtName }}</option>
                            @endforeach
                            
                        </select>
                        <span class="text-danger"> {{ $errors->has('distric')? $errors->first('distric'):'' }}</span>
                         
                        <input type="password"  style="margin-top: 10px"  name="password" placeholder="Password"/>
                        <span class="text-danger">{{ $errors->has('password')? $errors->first('password'):'' }}</span>
                        <input type="password" name="re_password" placeholder="Re_Password"/>
                        <span class="text-danger">{{ $errors->has('re_password')? $errors->first('re_password'):'' }}</span>
                        <button type="submit" class="btn btn-default">Signup</button>
                        {{ Form::close() }}
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->
@endsection