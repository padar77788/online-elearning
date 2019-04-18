
@extends('admin.layouts.master')
@section('title','Update Catagory')
@section('content')
<div class="content-wrapper">

<section class="content">
  <h3 class="text-center bg-weight-light border p-3 ">EDIT  CATAGORY</h3>

     <div class="row mt-5">

        <div class="col-md-6 offset-3">
          @if (Session::get('message')==true)
            <div class="alert alert-success">
              {{ Session::get('message') }}
            </div>
          @endif
           <form class="" action="{{ route('update-catagory')}}" method="post">
             @csrf
             <div class="form-group">
               <label for="">Title</label>
               <input type="text" name="title" class="form-control" value="{{ $catagory->title}}">
               <input type="hidden" name="id" value="{{ $catagory->id }}">
               <span class="bg-danger">{{ $errors->first('title')}}</span>

             </div>
              <div class="form-group">
               <label for=""></label>
               <input type="submit" name="btn" class="form-control btn btn-success" value="UPDATE">

             </div>

           </form>
        </div>

     </div>

   </section>
 </div>

@endsection
