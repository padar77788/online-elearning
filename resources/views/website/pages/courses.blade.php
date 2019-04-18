

@extends('website.layouts.master')
@section('title','Course')

@section('content')
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">
            <div class="mb-5 element-animate">
              <h1>Level Up Your Skills</h1>
              <!-- <p class="lead">See our courses Below. Learn something new every day with skwela lorem ipsum dolor sit amet.</p>
              <p><a href="#" class="btn btn-primary">Sign up and get a 7-day free trial</a></p> -->
            </div>


          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

  <div class="comtainer">
    <div class="row mt-5">
           <div class="col-md-8 offset-2">
             <h3 class="">{{ $course->title}} </h3>
             <div class="page-border">
             </div>
                <div class="card mb-3">
                      <div class="row no-gutters">
                         <div class="col-md-4">
                             <img src="{{ asset( $course->image) }}" class="img-fluid">
                         </div>
                          <div class="col-md-8">
                            <div class="card-body">
                               <h6 class="card-text">{!! $course->discription !!}</h6>
                          </div>
                        </div>
                      </div>
                  </div>
           </div>

      </div>


    <div class="row">

    @foreach($sections as $section )

        <div class="col-md-8 offset-2">
            <div class="accordion" id="accordionExample">
                  <div class="card">
                      <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                               <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{{ $section->title }}" aria-expanded="true" aria-controls="collapseOne">
                              {{ $section->title }}
                           </button>
                      </h2>
                    </div>
                    <div id="{{ $section->title }}" class="collapse @if ($loop->first) show @endif" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body lession-list p-0">
                        @php($i=1)
                        @foreach($lessions as $lession )
                        @if ($lession->section_id==$section->id)
                        <ul style="list-style:none" class="p-0 m-0 ">
                              <li class="border-bottom m-0 p-2 ">
                                <span class="border-right ml-5"> {{$i++ }} </span>
                                  <a href="{{ route('lession',$lession->id )}}" >
                                      <i class="fa fa-video-camera text-muted ml-2">
                                       {{ $lession->title }}
                                  </i>
                                </a>
                              </li>
                      </ul>
                      @endif
                      @endforeach

                  </div>
              </div>
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
        <div class="col-xl-12">
          <div class="img-thumbnail">
            <div class="caption text-center">
            <a href="#" class="course">
              <img src="{{ asset('frontend/images/webdesign.jpg')}}" alt="Image placeholder">
              <h2>Web Design 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          </div>
        </div>

        <div class="col-xl-12">
          <div class="img-thumbnail">
            <div class="caption text-center">
            <a href="#" class="course">
              <img src="{{ asset('frontend/images/wordpress.jpg')}}" alt="Image placeholder">
              <h2>Web Design 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          </div>
        </div>

        <div class="col-xl-12">
          <div class="img-thumbnail">
            <div class="caption text-center">
            <a href="#" class="course">
              <img src="{{ asset('frontend/images/wordpress.jpg')}}" alt="Image placeholder">
              <h2>Web Design 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          </div>
        </div>

        <div class="col-xl-12">
          <div class="img-thumbnail">
            <div class="caption text-center">
            <a href="#" class="course">
              <img src="{{ asset('frontend/images/wordpress.jpg')}}" alt="Image placeholder">
              <h2>Web Design 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="img-thumbnail">
            <div class="caption text-center">
            <a href="#" class="course">
              <img src="{{ asset('frontend/images/wordpress.jpg')}}" alt="Image placeholder">
              <h2>Web Design 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          </div>
        </div>

        <div class="col-xl-12">
          <div class="img-thumbnail">
            <div class="caption text-center">
            <a href="#" class="course">
              <img src="{{ asset('frontend/images/wordpress.jpg')}}" alt="Image placeholder">
              <h2>Web Design 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          </div>
        </div>

        <div class="col-xl-12">
          <div class="img-thumbnail">
            <div class="caption text-center">
            <a href="#" class="course">
              <img src="{{ asset('frontend/images/wordpress.jpg')}}" alt="Image placeholder">
              <h2>Web Design 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          </div>
        </div>

        <div class="col-xl-12">
          <div class="img-thumbnail">
            <div class="caption text-center">
            <a href="#" class="course">
              <img src="{{ asset('frontend/images/wordpress.jpg')}}" alt="Image placeholder">
              <h2>Web Design 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          </div>
        </div>
      </div>
  </div>
</section>
<!-- END section -->
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2>Meet Your Instructors</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum magnam illum maiores adipisci pariatur, eveniet.</p>
          </div>
        </div>
        <section class="school-features text-dark d-flex">

          <div class="inner">
            <div class="media d-block feature text-center">
              <img src="images/person_1.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Rhea Smith</h3>
                <p class="instructor-meta">WordPress Expert</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora fuga suscipit numquam esse saepe quam, eveniet iure assumenda dignissimos aliquam!</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="images/person_2.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Gregg White</h3>
                <p class="instructor-meta">HTML4, CSS3 Expert</p>
                <p>Delectus fuga voluptatum minus amet, mollitia distinctio assumenda voluptate quas repellat eius quisquam odio. Aliquam, laudantium, optio? Error velit, alias.</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="images/person_3.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Rob Gold</h3>
                <p class="instructor-meta">JS Expert</p>
                <p>Delectus fuga voluptatum minus amet, mollitia distinctio assumenda voluptate quas repellat eius quisquam odio. Aliquam, laudantium, optio? Error velit, alias.</p>
              </div>
            </div>


            <div class="media d-block feature text-center">
              <img src="images/person_4.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Wennie Poe</h3>
                <p class="instructor-meta">Angular JS Expert</p>
                <p>Harum, adipisci, aspernatur. Vero repudiandae quos ab debitis, fugiat culpa obcaecati, voluptatibus ad distinctio cum soluta fugit sed animi eaque?</p>
              </div>
            </div>
          </div>
        </section>

        <section class="school-features text-dark last d-flex">

          <div class="inner">
            <div class="media d-block feature text-center">
              <img src="images/person_1.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Rhea Smith</h3>
                <p class="instructor-meta">WordPress Expert</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora fuga suscipit numquam esse saepe quam, eveniet iure assumenda dignissimos aliquam!</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="images/person_2.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Gregg White</h3>
                <p class="instructor-meta">Photoshop Expert</p>
                <p>Delectus fuga voluptatum minus amet, mollitia distinctio assumenda voluptate quas repellat eius quisquam odio. Aliquam, laudantium, optio? Error velit, alias.</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="images/person_3.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Rob Gold</h3>
                <p class="instructor-meta">Web Design Expert</p>
                <p>Delectus fuga voluptatum minus amet, mollitia distinctio assumenda voluptate quas repellat eius quisquam odio. Aliquam, laudantium, optio? Error velit, alias.</p>
              </div>
            </div>


            <div class="media d-block feature text-center">
              <img src="images/person_4.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Wennie Poe</h3>
                <p class="instructor-meta">React JS Expert</p>
                <p>Harum, adipisci, aspernatur. Vero repudiandae quos ab debitis, fugiat culpa obcaecati, voluptatibus ad distinctio cum soluta fugit sed animi eaque?</p>
              </div>
            </div>
          </div>
        </section>


      </div>
    </section>
    <!-- END section -->



    @endsection
