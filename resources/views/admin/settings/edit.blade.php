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
            <form action="{{url('/admin/dashboard/settingupdate')}}" method="POST" enctype="multipart/form-data">
                @csrf
                ...
                <!--begin::Body-->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="about_me" class="form-label">About me</label>
                        <textarea name="about_me" id="summernote" cols="30" rows="10" class="form-control" required>{{$setting->about_me}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="facebook" class="form-label">Facebook Link(Optional)</label>
                        <input type="text" class="form-control" value="{{$setting->facebook}}" id="facebook" name="facebook" 
                            aria-describedby="emailHelp" />

                    </div>
                    <div class="mb-3">
                        <label for="Twitter" class="form-label">Twitter Link(Optional)</label>
                        <input type="text" class="form-control" value="{{$setting->Twitter}}" name="Twitter" id="Twitter"  />
                    </div>

                    <div class="mb-3">
                        <label for="Github" class="form-label">Github Link(Optional)</label>
                        <input type="text" class="form-control" value="{{$setting->Github}}" name="Github" id="Github"  />
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
