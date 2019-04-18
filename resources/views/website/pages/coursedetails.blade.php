

@extends('website.layouts.master')
@section('title','Course Details')
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
            <p class="lead">Learn something new every day with skwela lorem ipsum dolor sit amet.</p>
            <p><a href="#" class="btn btn-primary">Sign up and get a 7-day free trial</a></p>
          </div>


        </div>
      </div>
    </div>
  </section>
  <section class="school-features d-flex" style="background-image: url({{ asset('frontend/images/big_image_3.jpg') }} );">


 </section>
 <!-- END section -->

<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="{{ asset('frontend/images/big_image_3.jpg')}} " class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Start Course</a>
        </div>
        <div class="p-border">
        </div>
      </div>

    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="{{ asset('frontend/images/big_image_3.jpg')}} " class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Start Course</a>

        </div>
        <div class="p-border">
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="{{ asset('frontend/images/big_image_3.jpg')}} " class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Start Course</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Start Course</a>

        </div>
        <div class="p-border">
        </div>
      </div>
    </div>
    </div>
    <div class="row mt-3 mb-3">
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="{{ asset('frontend/images/big_image_3.jpg')}} " class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Start Course</a>

          </div>
          <div class="p-border">
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="{{ asset('frontend/images/big_image_3.jpg')}} " class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Start Course</a>
          </div>
          <div class="p-border">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="{{ asset('frontend/images/big_image_3.jpg')}} " class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Start Course</a>
          </div>
          <div class="p-border">
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
         <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum magnam illum maiores adipisci pariatur, eveniet.</p>
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
