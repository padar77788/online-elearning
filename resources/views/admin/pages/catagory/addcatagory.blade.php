
@extends('admin.layouts.master')
@section('title','Add Catagory')
@section('content')
<div class="content-wrapper">

<section class="content">
  <h3 class="text-center bg-weight-light border p-2 ">ADD CATAGORY</h3>

       <div class="row mt-5">
        <div class="col-md-6 offset-3">
          <div class="card p-5">
            @if (Session::get('message')==true)
              <div class="alert alert-success">
                {{ Session::get('message') }}
              </div>
            @endif
            <div class="card-body">
              <form class="" action="{{ route('store-catagory')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" name="title" class="form-control" value="">
                  <span class="bg-danger">{{ $errors->first('title')}}</span>

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
