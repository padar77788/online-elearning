

<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }} ">

    <link rel="stylesheet" href="{{ asset('frontend/fonts/ionicons/css/ionicons.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/fonts/fontawesome/css/font-awesome.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/font/flaticon.css') }} ">
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/mystyle.css') }}">


    @yield('css')
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img src="{{ asset('frontend/images/logo.jpg')}}" width='30px' height='30px' class="img-fluid"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">HOME</a>
            </li>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 COURSE
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="{{ url('webdesigin')}}">Webdesigin</a>
                 <a class="dropdown-item" href="{{ url('webdevlopment')}}">Webdevlopment</a>
                 <a class="dropdown-item" href="{{ url('graphics')}}">Graphics Design</a>
                 <a class="dropdown-item" href="{{ url('networking')}}">Networking</a>
                 <a class="dropdown-item" href="{{ url('freelancing')}}">Freelancing</a>

               </div>
             </li>

             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Catagory
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                 @foreach($categoris as $category)
                  <a class="dropdown-item" href="{{ route('catagory',$category->id )}}"> {{ $category->title }}</a>
                 @endforeach
                </div>
              </li>


              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   STUDENTS
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item " href="#">STUDENT WORKS</a>
                   <a class="dropdown-item" href="#"> ARCHIVMET AND AWARDS</a>
                   <a class="dropdown-item" href="#">STUDENT PLACEMENT</a>
                   <a class="dropdown-item" href="#">STUDENT FEEDBACK</a>
                   <a class="dropdown-item" href="#">FREELANCING</a>

                 </div>
               </li>

            <li class="nav-item active">
              <a class="nav-link" href="{{ route('about') }}">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('service')}}">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact')}}">CONTACT</a>
            </li>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                     @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                         @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->first_name  }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('profile')}}">
                                    <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                  </a>
                                  <a class="dropdown-item" href="{{ route('password')}}">
                                    <i class="fa fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                  </a>
                                  <a class="dropdown-item" href="#">
                                    <i class="fa fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                  </a>

                                  <div class="dropdown-divider"></div>
                                  <div >
                                    <a class="dropdown-item fa fa-sign-out" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                </li>
                @endguest
            </ul>

          </ul>
        </div>
      </div>
    </nav>



    <!-- END section -->






   @yield('content')




<div class="container-fluid  datempete-footer">
      <div class="container ">
        <div class="row  ">
          <div class="col-md-4 mt-5">
            <h4 class="mb-4"><strong>Bangladesh Office</strong></h4>
            <p>House # 1/5, Flat # C, Road #01,<br>
            Shamoli,Dhaka, Bangladesh 1207
            </p>
          </div>

          <div class="col-md-4 mt-5">
            <h4 class="mb-4"><strong>UK Office</strong></h4>
            <p>42 Wheatland<br>
            Ln, Wallasey, Wirral CH44<br>
            7EQ, United Kingdom
            </p>
          </div>

          <div class="col-md-4 mt-5">
          <h4 class="mb-4"><strong>Follow Us</strong><h4>
            <ul id="" class="cnss-social-icon .follow-us" style="text-align:left;">
              <li class="cn-fa-facebook" style="display:inline-block;">
                <a class="" target="_blank" href="https://www.facebook.com/profile.php?id=100009524803869" title="Facebook" style="">
                  <img src="{{ asset('frontend/images/iconfinder_Asset_2_2001646.png') }}" alt="Facebook" title="Facebook" style="margin: 2px; opacity: 1;" width="32" height="32" border="0">
                </a>
              </li>
              <li class="cn-fa-twitter" style="display:inline-block;">
                <a class="" target="_blank" href="https://twitter.com/detempete" title="Twitter" style="">
                  <img src="https://detempete.com/wp-content/uploads/2019/03/iconfinder_Asset_3_2001676.png" alt="Twitter" title="Twitter" style="margin: 2px; opacity: 1;" width="32" height="32" border="0">
                </a>
              </li>
              <li class="cn-fa-linkedin" style="display:inline-block;">
                <a class="" target="_blank" href="https://linkedin.com/" title="LinkedIn" style="">
                  <img src="https://detempete.com/wp-content/uploads/2019/03/iconfinder_Social_Icons-05_2024254.png" alt="LinkedIn" title="LinkedIn" style="margin:2px;" width="32" height="32" border="0">
                </a>
              </li>
              <li class="cn-fa-instagram" style="display:inline-block;">
                <a class="" target="_blank" href="https://instagram.com/" title="Instagram" style="">
                  <img src="https://detempete.com/wp-content/uploads/2019/03/iconfinder_Social_Icons-04_2024255.png" alt="Instagram" title="Instagram" style="margin:2px;" width="32" height="32" border="0">
                </a>
              </li>
              <li class="cn-fa-youtube" style="display:inline-block;">
                <a class="" target="_blank" href="https://youtube.com/" title="YouTube" style="">
                  <img src="https://detempete.com/wp-content/uploads/2019/03/iconfinder_Social_Icons-08_2024251-1.png" alt="YouTube" title="YouTube" style="margin:2px;" width="32" height="32" border="0">
                </a>
              </li>
            </ul>
          </div>

        </div>
      </div>
      <hr>
     <p class="text-center mb-0">
				Design and Developed by
        <a href="#"> LearnOfCSE</a>
      </p>
    </div>

    <script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}" ></script>
    <script src="{{ asset('frontend/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>


    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/myjs.js') }}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
    @yield('js')
  </body>
</html>
