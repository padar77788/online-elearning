
@extends('admin.layouts.master')
@section('title','Update Section')

@section('content')
<div class="content-wrapper">

<section class="content">
  <h3 class="text-center bg-weight-light border p-3 ">EDIT  SECTION</h3>

     <div class="row mt-5">

        <div class="col-md-6 offset-3">
          <div class="card p-5">
            @if (Session::get('message')==true)
              <div class="alert alert-success">
                {{ Session::get('message') }}
              </div>
            @endif
            <div class="card-body">


               <form class="" action="{{ route('update-section')}}" method="post">
                 @csrf
                       <div class="form-group">
                         <label for="">Title</label>
                         <input type="text" name="title" class="form-control" value="{{ $section->title}}">
                         <input type="hidden" name="id" value="{{ $section->id }}">

                       </div>

                       <div class="form-group">
                        <label for="">Catagory</label>
                        <select class="form-control" name="course_id">
                          <option value="">... Select Catagory ...</option>
                          @foreach($course as $value)
                          <option value="{{ $value->id }}" {{ $value->id==$section->course_id ? 'selected' : '' }}>{{ $value->title }}</option>
                          @endforeach
                        </select>
                        <span class="text-danger mt-2">{{ $errors->first('course_id') }}</span>

                      </div>
                        <div class="form-group">
                         <label for=""></label>
                         <input type="submit" name="btn" class="form-control btn btn-success" value="UPDATE">

                       </div>

               </form>
            </div>
          </div>
        </div>

     </div>

   </section>
 </div>

@endsection
