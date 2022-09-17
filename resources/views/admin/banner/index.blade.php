
@extends('admin.admin_master')

@section('admin')
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-title mb-3">Banner Information</div>
            <form action="{{ route('store.banner') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row"></div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="BrideName">Bride Name</label>
                        <input name="title_one" class="form-control " id="firstName2" type="text" placeholder="Enter Bride name">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="GroomName">Groom Name</label>
                        <input name="title_two" class="form-control" id="lastName2" type="text" placeholder="Enter Groom name">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="Sign">Sign</label>
                        <input name="sign" class="form-control" id="lastName2" type="text" placeholder="Enter Sign">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="Description">Description</label>
                        <input name="subtitle" class="form-control" id="lastName2" type="text" placeholder="Enter Description">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="Image">Image</label>
                        <div class="custom-file">
                            <input name="image" class="custom-file-input" id="image" type="file">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                        {{-- <div class="input-group-append"><span class="input-group-text" id="inputGroupFileAddon02">Upload</span></div> --}}
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