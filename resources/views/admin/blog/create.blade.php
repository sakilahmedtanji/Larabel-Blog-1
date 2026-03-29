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
            <form action="/blog/store-blog" method="POST" enctype="multipart/form-data">
                @csrf
                ...
                <!--begin::Body-->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Blog title</label>
                        <input type="text" class="form-control" id="title" name="title" required
                            aria-describedby="emailHelp" />

                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Blog subtitle</label>
                        <input type="text" class="form-control" name="subtitle" id="subtitle" required />
                    </div>

                    <div class="mb-3">
                        <label for="author_name" class="form-label">Author name</label>
                        <input type="text" class="form-control" name="author_name" id="author_name" required />
                    </div>
                    <div class="mb-3">
                        <label for="blog_details" class="form-label">Blog details</label>
                        <textarea name="blog_details" id="summernote" cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="image" id="image" required
                            accept="image/*" />
                        <label class="input-group-text" for="iamge">Upload Image</label>
                    </div>

                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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
