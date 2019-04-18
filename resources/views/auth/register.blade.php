@extends('website.layouts.master')
@section('css')
<style media="screen">
  .form-control-user{
    padding: 5px;
    border-radius: 8px;
    border: 1px solid blue;
  }
</style>
@endsection
@section('content')
<div class="container ">
  <div class="row align-items-center site-hero-inner justify-content-center">
    <div class="col-md-8 text-center">

      <div class="mb-5 element-animate">
        <h1>Register</h1>
      </div>
    </div>
  </div>
</div>
</section>
<!-- END section -->
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          <div class="col-md-8 offset-md-2">
            @if(Session::get('message')==true)
            <div class="alert alert-success mt-5">
              {{ Session::get('message') }}
            </div>
            @endif
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name="first_name" placeholder="First Name">
                    <span class="text-danger mt-3">{{ $errors->first('first_name')}}</span>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" name="last_name" placeholder="Last Name">
                    <span class="text-danger mt-3">{{ $errors->first('last_name')}}</span>

                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name="email" placeholder="Email">
                    <span class="text-danger mt-3">{{ $errors->first('email')}}</span>
                  </div>
                  <div class="col-sm-6">
                    <select class="form-control form-control-user" name="role">
                      <option value="">Register As</option>
                      <option value="Student">Student</option>
                      <option value="Instructor">Instructor</option>
                    </select>

                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user " name="password" placeholder="Password">
                    <span class="text-danger mt-3">{{ $errors->first('password')}}</span>

                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user"  name="confirm_password" placeholder="Repeat Password">
                    <span class="text-danger mt-3">{{ $errors->first('confirm_password')}}</span>

                  </div>
                </div>
                 <input type="submit" name="btn" class="form-control  btn btn-primary" value="Register Account">
                <hr>
                <a href="index.html" class="btn btn-info btn-user  btn-block">
                  <i class="fa fa-google  "></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-info btn-user  btn-block">
                  <i class="fa fa-facebook  "></i> Register with Facebook
                </a>

              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
