@extends('admin.master');



@section('maincontent')
<div class="row g-4 mt-4">
    <div class="col-md-12">
        <!--begin::Quick Example-->
        <div class="card card-primary card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">Quick Example</div>
            </div>
            <!--end::Header-->
            <!--begin::Form-->
            <form action="{{url('/admin/blog-update/'.$blog->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                ...
                <!--begin::Body-->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Blog title</label>
                        <input type="text" class="form-control" id="title" value="{{$blog->title}}" name="title" required
                            aria-describedby="emailHelp" />

                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Blog subtitle</label>
                        <input type="text" class="form-control" name="subtitle"  value="{{$blog->subtitle}}" id="subtitle" required />
                    </div>

                    <div class="mb-3">
                        <label for="author_name" class="form-label">Author name</label>
                        <input type="text" class="form-control" name="author_name" value="{{$blog->author_name}}" id="author_name" required />
                    </div>
                    <div class="mb-3">
                        <label for="blog_details" class="form-label">Blog details</label>
                        <textarea name="blog_details" id="summernote" cols="30" rows="10"  class="form-control" required>{{$blog->blog_details}}</textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="image" id="image" 
                            accept="image/*" />
                        <label class="input-group-text" for="iamge">Upload Image</label>
                        
                    </div>
                    <img src="{{$blog->image}}" alt="" height="100" width="200">

                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                <!--end::Footer-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Quick Example-->
    </div>
@endsection

@push('note')
    <script>
        $(document).ready(function() {
    $('#summernote').summernote();
    });
    </script>
@endpush
