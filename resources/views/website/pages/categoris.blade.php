

@extends('website.layouts.master')
@section('title','HOME')
@section('css')
<style media="screen">
  .p-border{
      background-color: blue;
      border: 2px solid blue;
  }
</style>
@section('js')
<script type="text/javascript">

</script>
@endsection
@endsection
@section('content')


<img src="{{ asset('frontend/images/paul-hanaoka-1373427-unsplash.jpg')}}" height="400px" width="1400px" alt="">

<div class="container mt-5">
    <div class="row">
      @foreach($courses as $course)
        <div class="col-md-4 mb-5 ">
          <div class="card cousre-div" style="width: 22rem;">
                            <img src="{{ asset( $course->image )}} " class="card-img-top" alt="..." height="150px">
                          <div class="card-body course-start-button">
                                <a href="{{ route('courses',$course->id )}}"><h5 class="card-title">{{ $course->title }}</h5></a>
                                <p class="card-text">{!! $course->discription !!}</p>

                                <a href="{{ route('courses',$course->id )}}" class="btn btn-success rounded p-1">StartCourse
                                 </a>
                            <div class="mt-2">
                                   <a href="#" style="font-size:18px" class="text-danger float-right">   <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                   </a>
                              </div>
                         </div>
                      <div class="p-border">
                    </div>
                </div>
          </div>
    @endforeach
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

       <div class="owl-carousel">
         @foreach($courses as $course)

         <div class="col-xl-12 w-100">
           <div class="img-thumbnail">
             <div class="caption text-center">
               <a href="#" class="course">
               <img src="{{ asset( $course->image ) }}" alt="Image placeholder">
               <h2>{{ $course->title }}</h2>
               <p>Enroll Now</p>
                </a>
           </div>
           </div>
          </div>
          @endforeach

        </div>

   </div>

 </section>
 <!-- END section -->


 @endsection
