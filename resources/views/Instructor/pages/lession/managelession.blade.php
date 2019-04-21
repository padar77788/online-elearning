
@extends('instructor.layouts.master')
@section('title','Mnage Lession')

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
                    <th>Course</th>
                    <th>Section</th>
                    <th>Discription</th>
                    <th>Video Url</th>
                    <th>Sourcecode Url</th>
                    <th>Action</th>
                  </tr>
                </thead>
              @php($i=1)
              @foreach($lessions as $lession)
                <tbody>
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $lession->title }}</td>
                    <td>{{ $lession->course->title}}</td>
                    <td>{{ $lession->section->title }}</td>
                    <td>{{ $lession->discription }}</td>
                    <td>{{ $lession->video_url }}</td>
                    <td>{{ $lession->sourcecode_url}}</td>

                    <td>
                        <a class="fa fa-edit "   href="{{ route('instructor-edit-lession',$lession->id)}}"></a>
                        <a  class="fa fa-trash"  href="{{ route('instructor-destroy-lession',$lession->id)}}"
                          onclick="return confirm('Are you sure want to delete this lession !!!')"
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
