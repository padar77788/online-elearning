

@extends('website.layouts.master')
@section('title','Profile')
@section('css')
@endsection
@section('content')
<div class="container">
      <div class="row align-items-center site-hero-inner justify-content-center">
        <div class="col-md-8 text-center">

          <div class="mb-5 element-animate">
            <h1>Learn From Doing</h1>
            <!-- <p class="lead">Learn something new every day with skwela lorem ipsum dolor sit amet.</p>
            <p><a href="#" class="btn btn-primary">Sign up and get a 7-day free trial</a></p>
          </div> -->


        </div>
      </div>
    </div>
  </section>
  <section class="school-features d-flex" style="background-image: url({{ asset('frontend/images/big_image_3.jpg') }} );">


 </section>
 <!-- END section -->

          <div class="container mt-5 mb-5">

               <div class="row">
                    <div class="col-md-8 offset-2">
                      <div class="card p-5">
                          <h2 class="text-muted fa fa-user border-bottom">Your profile</h2>
                          @if (Session::get('message')==true)
                          <h3 class="alert alert-success">{{ Session::get('message')}}</h3>
                          @endif
                        <div class="card-body">
                          <img src="{{ asset(optional($profile_data)->image )}}" class="profile-img" alt="">
                          <form class="" action="{{ route('edit-profile')}}" method="get">
                            </div>
                              <div class="form-group row">
                              <label for="" class="col-md-2">First Name</label>
                              <input type="text" readonly class="form-control col-md-10 " name="first_name" value="{{ $user_data->first_name }}">
                            </div>

                            <div class="form-group row">
                            <label for="" class="col-md-2">Last Name</label>
                            <input type="text" readonly class="form-control col-md-10 " name="last_name" value="{{ $user_data->last_name }}">
                            </div>
                            <div class="form-group row">
                            <label for="" class="col-md-2">DOB</label>
                            <input type="text" readonly class="form-control col-md-10" name="dob" value="{{ optional($profile_data)->dob }}">
                           </div>

                            <div class="form-group row">
                            <label for="" class="col-md-2">Email</label>
                            <input type="text" readonly class="form-control col-md-10" name="email" value="{{ $user_data->email }}">
                          </div>

                          <div class="form-group row">
                          <label for="" class="col-md-2">Phone</label>
                          <input type="text" readonly class="form-control col-md-10" name="mobile" value="{{ optional($profile_data)->mobile }}">
                        </div>

                        <div class="form-group row">
                        <label for="" class="col-md-2">Institute</label>
                        <input type="text" readonly  class="form-control col-md-10" name="univercity" value="{{ optional($profile_data)->univercity }}">
                      </div>

                      <div class="form-group row">
                      <label for="" class="col-md-2">Subject</label>
                      <input type="text" readonly class="form-control col-md-10" name="subject" value="{{ optional($profile_data)->subject }}">
                    </div>

                      <div class="form-group row">
                      <label for="" class="col-md-2">Address</label>
                      <input type="text" readonly class="form-control col-md-10" name="address" value="{{ optional($profile_data)->address}}">
                    </div>

                    <div class="form-group row">
                    <label for="" class="col-md-2"></label>
                    <input type="submit" class="form-control col-md-10 btn btn-danger" name="btn" value="UPDATE PROFILE">
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
