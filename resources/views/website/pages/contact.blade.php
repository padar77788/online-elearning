  @extends('website.layouts.master')

  @section('title','Contact')

  @section('content')

      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>Contact Us</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->


    <section class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success">
              {{ Session::get('message')}}
            </div>
            @endif
            <form action="{{ route('contact-store')}}" method="post">
              @csrf
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="name">Name</label>
                      <input type="text" id="name" name="name"class="form-control ">
                      <span class="text-danger mt-5">{{ $errors->first('name') }} </span>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="phone">Phone</label>
                      <input type="text" id="phone" name="phone" class="form-control ">
                          <span class="text-danger mt-5">{{ $errors->first('phone') }} </span>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="name">Email</label>
                      <input type="email" id="name" name="email" class="form-control ">
                      <span class="text-danger mt-5">{{ $errors->first('email') }} </span>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="phone">Subject</label>
                      <input type="text" id="phone" name="subject" class="form-control ">
                      <span class="text-danger mt-5">{{ $errors->first('subject') }} </span>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Write Message</label>
                      <textarea  id="message" name="message" class="form-control " cols="30" rows="8"></textarea>
                          <span class="text-danger mt-5">{{ $errors->first('message') }} </span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" name="btn" value="Send Message" class="btn btn-primary">
                    </div>
                  </div>
                </form>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
@endsection
