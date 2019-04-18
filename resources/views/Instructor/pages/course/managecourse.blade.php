
@extends('instructor.layouts.master')
@section('title','Manage Course')
@section('content')

<div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
          </div>
          <div class="card-body">
            @if (Session::get('message')==true)
              <div class="alert alert-success">
                {{ Session::get('message') }}
              </div>
            @endif
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Serial No </th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Discription</th>
                    <th>Catagory</th>
                    <th>Instructor</th>
                    <th>Action</th>
                  </tr>
                </thead>
              @php($i=1)
              @foreach($courses as $course)
                <tbody>
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $course->title }}</td>
                    <td> <img class="img img-circle rounded" src="{{ asset($course->image) }}" height="100px" width="100px" alt=""> </td>
                    <td>{{ $course->discription }}</td>
                    <td>{{ $course->catagory->title }}</td>
                    <td>{{ $course->user->first_name }}</td>

                    <td>
                        <a class="fa fa-edit "   href="{{ route('edit-course',$course->id)}}"></a>
                        <a  class="fa fa-trash"  href="{{ route('destroy-course',$course->id)}}"
                          onclick="return confirm('Are you sure want to delete this course !!!')"
                        ></a>

                    </td>

                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>

          </div>
        </div>

      </div>
      <!-- /.container-fluid -->


@endsection
