
@extends('instructor.layouts.master')
@section('title','Add Course')
@section('content')
<div class="content-wrapper">

<section class="content">
  <h3 class="text-center bg-light border rounded p-2 ">ADD COURSE </h3>

     <div class="row mt-5">

        <div class="col-md-8 offset-2">
          <div class="card p-5">
            @if (Session::get('message')==true)
              <div class="alert alert-success">
                {{ Session::get('message') }}
              </div>
            @endif

            <div class="card-body">
              <form class="" action="{{ route('instructor-store-course')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" name="title" class=" form-control" value="">
                  <span class="text-danger">{{ $errors->first('title')}}</span>
                </div>
                <div class="form-group">
                  <label for="">Discription</label>
                    <textarea name="discription"></textarea>
                    <span class="text-danger">{{ $errors->first('discription')}}</span>

                </div>
                <div class="form-group">
                  <label for="">Catagory</label>
                  <select class="form-control" name="catagory_id">
                    <option  value="">... Select Catagory ...</option>
                    @foreach($catagories as $catagory)
                    <option value="{{ $catagory->id }}">{{ $catagory->title }}</option>
                    @endforeach
                  </select>
                  <span class="text-danger">{{ $errors->first('catagory_id')}}</span>

                </div>

                <div class="form-group">
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


        </div>

     </div>

   </section>
 </div>

@endsection
