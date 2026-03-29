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
                          <th>About me</th >
                          <th>Facebook</th>
                          <th>Twitter</th>
                          <th>Github</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ( $massage as $massage)
                            <tr class="align-middle">
                          <td>{{$loop->index+1}}</td>  
                          <td>{{$massage->name}}</td>
                          <td>{{$massage->email}}</td>
                          <td>{{$massage->phone}}</td>
                            <td>{{$massage->massage}}</td>
                            <td>
                                
                                <a href="{{url('/admin/dashboard/deletemassage/'.$massage->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{-- {{$blogs->links('pagination::bootstrap-5')}} --}}
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