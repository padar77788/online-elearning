@extends('website.layouts.master')
@section('css')

@endsection
@section('content')


      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">
            <div class="mb-5 element-animate">
              <h1>Login</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

          <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                  <div class="col-md-8 offset-2">
                    @if(Session::get('message')==true)
                    <div class="alert alert-success mt-5">
                      {{ Session::get('message') }}
                    </div>
                    @endif
                    <div class="p-5">
                      <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                      </div>
                      <form class="user" action="{{ route('login' )}}" method="post">
                        @csrf

                        <div class="form-group mb-5">
                          <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address...">
                          <span class="text-danger mt-3">{{ $errors->first('email')}}</span>

                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control form-control-user"  name="password" placeholder="Password">
                          <span class="text-danger mt-3">{{ $errors->first('password')}}</span>

                        </div>
                        <div class="form-group mb-5">
                          <div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                          </div>
                        </div>
                        <input type="submit" class="btn btn-primary btn-user btn-block" name="btn" value="Login">
                        </a>
                        <hr>
                        <a href="index.html" class="btn btn-info btn-user btn-block">
                          <i class="fa fa-info fa-fw"></i> Login with Google
                        </a>
                        <a href="index.html" class="btn btn-info btn-user btn-block">
                          <i class="fa fa-facebook-f fa-fw"></i> Login with Facebook
                        </a>
                      </form>
                      <hr>
                      <div class="text-center">
                        <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                      </div>
                      <div class="text-center">
                        <a class="small" href="{{ route('register')}}">Create an Account!</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
@endsection
