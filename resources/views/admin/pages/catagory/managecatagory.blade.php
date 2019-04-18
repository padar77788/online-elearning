
@extends('admin.layouts.master')
@section('title','Manage Catagory')

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
                    <th>Action</th>
                  </tr>
                </thead>
              @php($i=1)
              @foreach($catagoris as $catagory)
                <tbody>
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $catagory->title }}</td>
                    <td>
                      <a  class="fa fa-eye" href="{{ route('show-catagory',$catagory->id)}}"></a>
                        <a class="fa fa-edit "   href="{{ route('edit-catagory',$catagory->id)}}"></a>
                        <a  class="fa fa-trash"  href="{{ route('destroy-catagory',$catagory->id)}}"
                          onclick="return confirm('Are you sure want to delete this catagory !!!')"
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
