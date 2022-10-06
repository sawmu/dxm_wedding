
@extends('admin.admin_master')

@section('admin')
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-title mb-3">Our Story Information</div>
            <form action="{{ route('store.story') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row"></div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="SectionTitle">Section Title</label>
                        <input name="SectionTitle" class="form-control " id="firstName2" type="text" placeholder="Enter Bride name">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="Image">Story Image</label>
                        <div class="custom-file">
                            <input name="image1" class="custom-file-input" id="image" type="file">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                        {{-- <div class="input-group-append"><span class="input-group-text" id="inputGroupFileAddon02">Upload</span></div> --}}
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="title1">Stroy Title</label>
                        <input name="title1" class="form-control " id="firstName2" type="text" placeholder="Enter Title">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="date1">Stroy Date</label>
                        <input name="date1" class="form-control " id="firstName2" type="text" placeholder="Enter Title">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="dec1">Story Description</label>
                        <input name="dec1" class="form-control" id="lastName2" type="text" placeholder="Enter Groom Description">
                    </div>

                    <div class="col-md-12 form-group mb-3">
                        <label for="Image">Story Image</label>
                        <div class="custom-file">
                            <input name="image2" class="custom-file-input" id="image" type="file">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                        {{-- <div class="input-group-append"><span class="input-group-text" id="inputGroupFileAddon02">Upload</span></div> --}}
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="title2">Stroy Title</label>
                        <input name="title2" class="form-control " id="firstName2" type="text" placeholder="Enter Title">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="date2">Stroy Date</label>
                        <input name="date2" class="form-control " id="firstName2" type="text" placeholder="Enter Title">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="dec2">Story Description</label>
                        <input name="dec2" class="form-control" id="lastName2" type="text" placeholder="Enter Groom Description">
                    </div>

                    <div class="col-md-12 form-group mb-3">
                        <label for="Image">Story Image</label>
                        <div class="custom-file">
                            <input name="image3" class="custom-file-input" id="image" type="file">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                        {{-- <div class="input-group-append"><span class="input-group-text" id="inputGroupFileAddon02">Upload</span></div> --}}
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="title3">Stroy Title</label>
                        <input name="title3" class="form-control " id="firstName2" type="text" placeholder="Enter Title">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="date3">Stroy Date</label>
                        <input name="date3" class="form-control " id="firstName2" type="text" placeholder="Enter Title">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="dec3">Story Description</label>
                        <input name="dec3" class="form-control" id="lastName2" type="text" placeholder="Enter Groom Description">
                    </div>

                    
                    
                    
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection