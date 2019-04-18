
@extends('instructor.layouts.master')
@section('title','Add Section')
@section('css')
<style media="screen">
.p-card{
     border:2px solid #284FC2;
}
</style>

@endsection
@section('content')
<div class="content-wrapper">

<section class="content">
  <h3 class="text-center bg-light border p-2 ">ADD SECTION </h3>

     <div class="row mt-5">

        <div class="col-md-6 offset-3">


            <div class="card p-5 p-card">
              @if (Session::get('message')==true)
                <div class="alert alert-success">
                  {{ Session::get('message') }}
                </div>
              @endif
                  <div class="card-body">
                    <form class="" action="{{ route('store-section')}}" method="post">
                      @csrf
                      <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" value="">
                        <span class="text-danger mt-2">{{ $errors->first('title') }}</span>

                      </div>
                       <div class="form-group">
                        <label for="">Course</label>
                          <select class="form-control" name="course_id">
                            <option value="">... Select Course ...</option>
                            @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                            @endforeach
                          </select>
                          <span class="text-danger mt-2">{{ $errors->first('course_id') }}</span>
                      </div>

                      <div class="form-group">
                       <label for=""></label>
                       <input type="submit" name="btn" class="form-control btn btn-success" value="Submit">
                     </div>
                    </form>
                </div>
              </div>


            </div>
        </div>


   </section>
 </div>


@endsection
