

@extends('website.layouts.master')
@section('title','Setting')
@section('css')
<style media="screen">
  .p-border{
      background-color: blue;
      border: 2px solid blue;
  }
</style>
@endsection
@section('content')
<div class="container">
      <div class="row align-items-center site-hero-inner justify-content-center">
        <div class="col-md-8 text-center">

          <div class="mb-5 element-animate">
            <h1>Learn From Doing</h1>
            <!-- <p class="lead">Learn something new every day with skwela lorem ipsum dolor sit amet.</p>
            <p><a href="#" class="btn btn-primary">Sign up and get a 7-day free trial</a></p> -->
          </div>


        </div>
      </div>
    </div>
  </section>
  <section class="school-features d-flex" style="background-image: url({{ asset('frontend/images/big_image_3.jpg') }} );">


 </section>
 <!-- END section -->

          <div class="container mt-5 mb-5">

               <div class="row">
                          <div class="col-md-8 offset-2 ">
                            <h3 class="border p-2 mb-5 text-center rounded bg-light">Change password</h3>
                            <div class="card p-5">
                              @if (Session::get('message')==true)
                              <h3 class="alert alert-success text-danger">{{ Session::get('message')}}</h3>
                              @endif

                    <div class="card-body">
                          <form class="" action="{{ route('update-password')}}" method="post">
                              @csrf

                          <div class="form-group ">
                                  <label for="" class="">Old Password</label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text fa fa-lock" id="inputGroupPrepend2"></span>
                                    </div>
                                  <input type="password"  class="form-control " name="old_password"  value="" >
                                </div>
                                <span class="text-danger">{{ $errors->first('old_password')}}</span>

                        </div>

                      <div class="form-group ">
                                  <label for="" class="">New Password</label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text fa fa-lock" id="inputGroupPrepend2"></span>
                                    </div>
                                  <input type="password"  class="form-control " name="password"  value="" >
                                </div>
                                <span class="text-danger">{{ $errors->first('password')}}</span>

                     </div>

                      <div class="form-group ">
                                    <label for="" class="">Confirm Password</label>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text fa fa-lock" id="inputGroupPrepend2"></span>
                                      </div>
                                    <input type="password"  class="form-control " name="password_confirmation"  value="">
                                    <span class="text-danger">{{ $errors->first('password_confirmation')}}</span>
                                  </div>
                                  <span class="text-danger">{{ $errors->first('password_confirmation')}}</span>

                      </div>


                          <div class="form-group ">
                                  <label for="" class=""></label>
                                  <input type="submit" class="form-control  btn btn-danger" name="btn" value="Save">
                        </div>
                      </form>
                    </div>

                    </div>
                 </div>


                 </div>
               </div>
          </div>
 <section class="site-section bg-light">
   <div class="container">
     <div class="row justify-content-center mb-5">
       <div class="col-md-7 text-center">
         <h2>Top Courses</h2>
       </div>
     </div>
     <div class="row top-course">
       <div class="col-lg-2 col-md-4 col-sm-6 col-12">
         <a href="#" class="course">
           <img src="{{ asset('frontend/images/webdesign.jpg')}}" alt="Image placeholder">
           <h2>Web Design 101</h2>
           <p>Enroll Now</p>
         </a>
       </div>
       <div class="col-lg-2 col-md-4 col-sm-6 col-12">
         <a href="#" class="course">
           <img src="{{ asset('frontend/images/wordpress.jpg')}}" alt="Image placeholder">

           <h2>Learn How To Develop WordPress Plugin</h2>
           <p>Enroll Now</p>
         </a>
       </div>
       <div class="col-lg-2 col-md-4 col-sm-6 col-12">
         <a href="#" class="course">
           <img src="{{ asset('frontend/images/javascript.jpg')}}" alt="Image placeholder">

           <h2>JavaScript 101</h2>
           <p>Enroll Now</p>
         </a>
       </div>
       <div class="col-lg-2 col-md-4 col-sm-6 col-12">
         <a href="#" class="course">
           <img src="{{ asset('frontend/images/photoshop.jpg')}}" alt="Image placeholder">
           <h2>Photoshop Design 101</h2>
           <p>Enroll Now</p>
         </a>
       </div>
       <div class="col-lg-2 col-md-4 col-sm-6 col-12">
         <a href="#" class="course">
           <img src="{{ asset('frontend/images/reactjs.jpg')}}" alt="Image placeholder">
           <h2>Learn Native ReactJS</h2>
           <p>Enroll Now</p>
         </a>
       </div>
       <div class="col-lg-2 col-md-4 col-sm-6 col-12">
         <a href="#" class="course">
           <img src="{{ asset('frontend/images/angularjs.jpg')}}" alt="Image placeholder">
           <h2>Learn AngularJS 2</h2>
           <p>Enroll Now</p>
         </a>
       </div>
     </div>
   </div>
 </section>
 <!-- END section -->


 @endsection
