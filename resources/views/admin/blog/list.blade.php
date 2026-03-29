@extends('admin.master')

@section('maincontent')
    <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">Blog list</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Image</th >
                          <th>Title</th>
                          <th>Sub-title</th>
                          <th>Author name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ( $blogs as $blog)
                            <tr class="align-middle">
                          <td>{{$loop->index+1}}</td>  
                          <td><img src="{{$blog->image}}" alt="" height="100px" width="200px"></td>
                          <td>{{$blog->title}}</td>
                          <td>{{$blog->subtitle}}</td>
                            <td>{{$blog->author_name}}</td>
                            <td>
                                <a href="{{url('/admin/blog-edit/'.$blog->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{url('/admin/blog-delete/'.$blog->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{$blogs->links('pagination::bootstrap-5')}}
                  </div>

                  
                  <!-- /.card-body -->
                  
                <!-- /.card -->

                
                <!-- /.card -->
              </div>
              <!-- /.col -->
              
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </div>
@endsection