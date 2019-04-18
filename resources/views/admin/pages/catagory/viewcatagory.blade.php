
@extends('admin.layouts.master')
@section('title','View catagory')

@section('content')

<div class="container-fluid">
  <h3 class="text-center bg-weight-light border p-2 ">VIEW CATAGORY</h3>
        <div class="col-md-6 offset-2 mt-5">
          Title : {{ $catagory->title }}

        </div>
      </div>
      <!-- /.container-fluid -->


@endsection
