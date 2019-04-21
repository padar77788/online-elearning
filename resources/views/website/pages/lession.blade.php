

@extends('website.layouts.master')
@section('title','Lesson')

@section('css')

@endsection
@section('content')

<br><br>
<div class="container ">

<div class="row mt-5">
  <div class="col-md-4">
    @foreach($sections as $section )
    <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                         <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{{ $section->title }}" aria-expanded="true" aria-controls="collapseOne">
                        {{ $section->title }}
                     </button>
                </h2>
              </div>

        <div id="{{ $section->title }}" class="collapse @if ($singleLession->section_id==$section->id) show @endif"   aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body lession-list p-0">
                        @php($i=1)
                        @foreach($allLession as $lession )
                        @if ($lession->section_id==$section->id)
                        <ul style="list-style:none" class="p-0 m-0 ">
                              <li class="border-bottom m-0 p-2 @if ($singleLession->id ==$lession->id) active-lesson @endif" >
                                <span class="border-right ml-5"> {{$i++ }} </span>
                                  <a href="{{ route('lession',$lession->id )}}" ">
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
  @endforeach

            <div class="mt-2">
                <img src="{{ asset( $course->image) }}" class="img-fluid" >

              </div>
        </div>

    <div class="col-md-8">
      <!-- 16:9 aspect ratio -->
        <h3 class="text-black ">{{ $singleLession->title }}</h3>
        <div class="page-border">
        </div>
          <div class="embed-responsive embed-responsive-16by9">
                          <iframe width="685" height="514" src="{{ $singleLession->video_url }}" allowfullscreen>

                          </iframe>

            </div>


              <div class="mt-2">
                                @if ($previous)
                                      <a href="{{ route('lession',$previous) }}" class="btn btn-success p-0">Previous</a>
                                @endif     
                                @if($next)
                                
                                      <a href="{{ route('lession',$next)}}" class="btn btn-danger float-right p-1">Next</a>
                                @endif     

              </div>

              <div class="lession-like-dilike-view">
                              <ul>
                                <li>{{ $singleLession->view_count }} views</li>
                                <li>
                                  <a href="{{ route('like',$singleLession->id )}}" class="fa fa-hand-o-right">
                                    <span >({{  optional($likes)->count() }})</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="{{ route('dislike',$singleLession->id )}}" class="fa fa-hand-o-down">
                                    <span>({{ optional($dislikes)->count() }})</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="">Share</a>
                                </li>
                              </ul>

                </div>
                <hr>


                 <div class="row">
                                <div class="col-md-10">
                                  <h5 class="d-block">{{ $comments->count() }}  Comments</h5>

                                </div>
                                <div class="col-md-2 float-right">
                                    <form class="" action="{{ route('subscribe-store')}}" method="post">
                                      @csrf
                                      <button type="submit" class="btn btn-danger p-1" name="subscribe">SUBSCRIBE {{ $subscribers->count()}}</button>
                                    </form>
                                </div>

                 </div>
              <hr>

                        <form class="" action="{{ route('comments')}}" method="post">
                                      @if(Session::get('message')==true)
                                        <p class="text-danger">{{ Session::get('message') }}</p>
                                        @endif
                                      @csrf
                                      <div class="form-group row">
                                        <div class="col-md-2">
                                          @if (Auth::check())
                                          <img src="{{ asset( Auth::user()->profile->image) }}" alt="">
                                          <input type="hidden" name="lesson_id" value="{{ $singleLession->id }}">
                                          @else
                                          <p>dfdgdgdg dggdgf</p>

                                          <img src="" alt="">
                                          @endif
                                        </div>
                                        <div class="col-md-10">
                                          <textarea name="comment" class="form-control" rows="2" cols="80" placeholder="Add a public comment "></textarea>
                                          <input type="submit" class="btn btn-success  rounded mt-1" name="btn" value="Comment">
                                        </div>
                          </div>

                        </form>

                @foreach($comments as $comment)

                         <div class="row">
                           <div class="col-md-2">
                             <img height='50px' width='50px' src="{{ asset(optional($comment)->user->profile->image)}}" alt="">
                           </div>
                             <div class="col-md-10">
                                          <h5>{{ optional($comment)->user->first_name }} <span class="text-muted">{{ date('h:m:s a',strtotime($comment->created_at))}}</span> </h5>
                                        <p>
                                          {{ $comment->text }}

                                        </p>
                                        <span>
                                          <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                            <i class="fa fa-reply collapsed"  data-toggle="collapse" data-target="#{{ $comment->id }}" aria-expanded="false" aria-controls="collapseThree">
                                            </i>
                                      </span>

                            <div id="{{ $comment->id }}" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">

                            <div class="col-md-10">
                                    <form class="" action="{{ route('reply')}}" method="post">
                                        @csrf
                                      <div class="form-group row">
                                         <div class="col-2">
                                            <img height='50px' width='50px' src="{{ asset('frontend/images/user.png')}}"   alt="">
                                            </div>
                                              <div class="col-md-10">
                                               <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                                               <input type="hidden" name="lesson_id" value="{{ $singleLession->id }}">
                                                <textarea name="text" rows="2" placeholder="add a public reply"class="form-control" cols="60"></textarea>
                                              <input type="submit" class="btn btn-success p-1 rounded mt-1" name="btn" value="Reply">
                                      </div>
                                </div>

                                </form>

                        </div>

                  @foreach($replies as $reply)
                  @if($reply->comment_id==$comment->id)
                                        <div class="row ml-1">
                                          <div class="col-md-2">
                                            <img height='50px' width='50px' src="{{ asset('frontend/images/user.png')}}" alt="">

                                          </div>
                                      <div class="col-md-10">

                                        {{ optional($reply)->user->first_name }}
                                        <p>
                                          {{ $reply->text }}
                                        </p>
                                      <span>
                                          <a href="#nnn"><i class="fa fa-thumbs-o-up"></i></a>
                                          <i class="fa fa-reply collapsed"  data-toggle="collapse" data-target="#nnn" aria-expanded="false" aria-controls="collapseThree">
                                          </i>
                                      </span>
                                      </div>
                                    </div>
                        @endif
                        @endforeach

                </div>

                  </div>

                         </div>
                @endforeach
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
              <img src="{{ asset('frontend/images/person_1.jpg')}}" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Rhea Smith</h3>
                <p class="instructor-meta">WordPress Expert</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora fuga suscipit numquam esse saepe quam, eveniet iure assumenda dignissimos aliquam!</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="{{ asset('frontend/images/person_2.jpg')}}" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Gregg White</h3>
                <p class="instructor-meta">HTML4, CSS3 Expert</p>
                <p>Delectus fuga voluptatum minus amet, mollitia distinctio assumenda voluptate quas repellat eius quisquam odio. Aliquam, laudantium, optio? Error velit, alias.</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="{{ asset('frontend/images/person_3.jpg')}}" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Rob Gold</h3>
                <p class="instructor-meta">JS Expert</p>
                <p>Delectus fuga voluptatum minus amet, mollitia distinctio assumenda voluptate quas repellat eius quisquam odio. Aliquam, laudantium, optio? Error velit, alias.</p>
              </div>
            </div>


            <div class="media d-block feature text-center">
              <img src="{{ asset('frontend/images/person_4.jpg')}}" alt="Image placeholder" class="mb-3">
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
              <img src="{{ asset('frontend/images/person_1.jpg')}}" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Rhea Smith</h3>
                <p class="instructor-meta">WordPress Expert</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora fuga suscipit numquam esse saepe quam, eveniet iure assumenda dignissimos aliquam!</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="{{ asset('frontend/images/person_2.jpg')}}" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Gregg White</h3>
                <p class="instructor-meta">Photoshop Expert</p>
                <p>Delectus fuga voluptatum minus amet, mollitia distinctio assumenda voluptate quas repellat eius quisquam odio. Aliquam, laudantium, optio? Error velit, alias.</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="{{ asset('frontend/images/person_3.jpg')}}" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Rob Gold</h3>
                <p class="instructor-meta">Web Design Expert</p>
                <p>Delectus fuga voluptatum minus amet, mollitia distinctio assumenda voluptate quas repellat eius quisquam odio. Aliquam, laudantium, optio? Error velit, alias.</p>
              </div>
            </div>


            <div class="media d-block feature text-center">
              <img src="{{ asset('frontend/images/person_4.jpg')}}" alt="Image placeholder" class="mb-3">
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

    @endsection
