
@extends('instructor.layouts.master')
@section('title','Update lession')
@section('content')
<div class="content-wrapper">
<section class="content">
  <h3 class="text-center bg-light border rounded p-2 ">EDIT LESSION  </h3>
     <div class="row mt-5">
        <div class="col-md-8 offset-2">
          <div class="card p-5">
            @if (Session::get('message')==true)
                <div class="alert alert-success">
                  {{ Session::get('message') }}
                </div>
            @endif
              <div class="card-body">
                <form class="" action="{{ route('instructor-update-lession')}}" method="post" >
                  @csrf
                    <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" name="title" class=" form-control" value="{{ $lession->title  }}">
                  <input type="hidden" name="id" class=" form-control" value="{{ $lession->id }}">

                  <span class="text-danger">{{ $errors->first('title')}}</span>
                </div>
                <div class="form-group">
                  <label for="">Discription</label>
                    <textarea name="discription">{{ $lession->discription }}</textarea>
                    <span class="text-danger">{{ $errors->first('discription')}}</span>

                </div>
                <div class="form-group">
                  <label for="">Course</label>
                  <select class="form-control" name="course_id">
                    <option  value="">... Select Course ...</option>
                    @foreach($courses as $course)
                    <option value="{{ $course->id }}" {{ $course->id==$lession->course_id ? 'selected' : ''}}>{{ $course->title }}</option>
                    @endforeach
                  </select>
                  <span class="text-danger">{{ $errors->first('catagory')}}</span>
                </div>
                <div class="form-group">
                  <label for="">Section</label>
                  <select class="form-control" name="section_id">
                       <option value="">... Select Section ...</option>
                       @foreach($sections as $section)
                       <option value="{{ $section->id }}" {{ $section->id==$lession->section_id ? 'selected' : ''}}>{{ $section->title }}</option>
                       @endforeach
                  </select>
                  <span class="text-danger">{{ $errors->first('section_id')}}</span>

                </div>
                <div class="form-group">
                  <label for="">Video Url</label>
                  <input type="url" name="video_url" class="form-control " value="{{ $lession->video_url }}">
                  <span class="text-danger">{{ $errors->first('video_url')}}</span>

                </div>

                <div class="form-group">
                  <label for="">Sourcecode Url</label>
                  <input type="url" name="sourcecode_url" class="form-control " value="{{ $lession->sourcecode_url }}">
                  <span class="text-danger">{{ $errors->first('sourcecode_url')}}</span>

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
