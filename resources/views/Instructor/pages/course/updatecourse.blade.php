
@extends('instructor.layouts.master')
@section('title','Update Course')
@section('content')
<div class="content-wrapper">

<section class="content">
  <h3 class="text-center bg-light border rounded p-2 ">UPDATE  COURSE </h3>

     <div class="row mt-5">

        <div class="col-md-6 offset-3">
          @if (Session::get('message')==true)
            <div class="alert alert-success">
              {{ Session::get('message') }}
            </div>
          @endif
           <form class="" action="{{ route('instructor-update-course')}}" method="post" enctype="multipart/form-data">
             @csrf
             <div class="form-group">
               <label for="">Title</label>
               <input type="text" name="title" class=" form-control" value="{{ $course->title }}">
               <input type="hidden" name="id" value="{{ $course->id }}">
               <span class="text-danger">{{ $errors->first('title')}}</span>
             </div>
             <div class="form-group">
               <label for="">Discription</label>
                 <textarea name="discription">{{ $course->discription }}</textarea>
                 <span class="text-danger">{{ $errors->first('discription')}}</span>

             </div>
             <div class="form-group">
               <label for="">Catagory</label>
               <select class="form-control" name="catagory">
                 <option  value="">... Select Catagory ...</option>
                 @foreach($catagories as $catagory)
                 <option
                 @if ($catagory->id==$course->catagory_id)
                    selected='selected'
                 @endif
                 value="{{ $catagory->id }}" >{{ $catagory->title }}</option>
                 @endforeach
               </select>
               <span class="text-danger">{{ $errors->first('catagory')}}</span>

             </div>

             <div class="form-group">
               <img src="{{ asset( $course->image )}}" height="100px" weight='100px' alt=""><br>

               <label for="">Image</label>
               <input type="file" name="image" class="form-control p-1" value="">
               <span class="text-danger">{{ $errors->first('image')}}</span>

             </div>
              <div class="form-group">
               <label for=""></label>
               <input type="submit" name="btn" class="form-control btn btn-success" value="Submit">

             </div>

           </form>
        </div>

     </div>

   </section>
 </div>

@endsection
