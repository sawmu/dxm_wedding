
@extends('admin.admin_master')

@section('admin')
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-title mb-3">Gallery</div>
            <form action="{{ url('admin/gallery/update/'.$gallery->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row"></div>
                  
                    <div class="col-md-12 form-group mb-3">
                        <label for="Image">Image</label>
                        <div class="custom-file">
                            <input value=" {{ $gallery->image }} " name="image" class="custom-file-input" id="image" type="file">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                        <div class="form-group">
                            <img src="{{ asset($gallery->image)}}" style="width:400px; Height: 450px" alt="{{ $gallery->title_one }}">
                        </div>
                        {{-- <div class="input-group-append"><span class="input-group-text" id="inputGroupFileAddon02">Upload</span></div> --}}
                    </div>
                    
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection