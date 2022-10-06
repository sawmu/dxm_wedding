
@extends('admin.admin_master')

@section('admin')
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-title mb-3">Our Story Information</div>
            <form action="{{ url('admin/design/story/update/'.$story->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row"></div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="SectionTitle">Section Title</label>
                        <input value=" {{ $story->SectionTitle }} " name="SectionTitle" class="form-control " id="firstName2" type="text" placeholder="Enter Bride name">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="Image">Story Image</label>
                        <div class="custom-file">
                            <input name="image1" class="custom-file-input" id="image" type="file">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                        <div class="form-group">
                            <img src="{{ asset($story->image1)}}" style="width:400px; Height: 450px" alt="{{ $story->title1 }}">
                        </div>
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="title1">Stroy Title</label>
                        <input value=" {{ $story->SectionTitle }} " name="title1" class="form-control " id="firstName2" type="text" placeholder="Enter Title">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="date1">Stroy Date</label>
                        <input value=" {{ $story->date1 }} " name="date1" class="form-control " id="firstName2" type="text" placeholder="Enter Title">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="dec1">Story Description</label>
                        <input value=" {{ $story->dec1 }} " name="dec1" class="form-control" id="lastName2" type="text" placeholder="Enter Groom Description">
                    </div>

                    <div class="col-md-12 form-group mb-3">
                        <label for="Image">Story Image</label>
                        <div class="custom-file">
                            <input name="image2" class="custom-file-input" id="image" type="file">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                        <div class="form-group">
                            <img src="{{ asset($story->image2)}}" style="width:400px; Height: 450px" alt="{{ $story->title1 }}">
                        </div>
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="title2">Stroy Title</label>
                        <input value=" {{ $story->title2 }} " name="title2" class="form-control " id="firstName2" type="text" placeholder="Enter Title">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="date2">Stroy Date</label>
                        <input value=" {{ $story->date2 }} " name="date2" class="form-control " id="firstName2" type="text" placeholder="Enter Title">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="dec2">Story Description</label>
                        <input value=" {{ $story->dec2 }} " name="dec2" class="form-control" id="lastName2" type="text" placeholder="Enter Groom Description">
                    </div>

                    <div class="col-md-12 form-group mb-3">
                        <label for="Image">Story Image</label>
                        <div class="custom-file">
                            <input name="image3" class="custom-file-input" id="image" type="file">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                        <div class="form-group">
                            <img src="{{ asset($story->image3)}}" style="width:400px; Height: 450px" alt="{{ $story->title1 }}">
                        </div>
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="title3">Stroy Title</label>
                        <input value=" {{ $story->title3 }} " name="title3" class="form-control " id="firstName2" type="text" placeholder="Enter Title">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="date3">Stroy Date</label>
                        <input value=" {{ $story->date3 }} " name="date3" class="form-control " id="firstName2" type="text" placeholder="Enter Title">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="dec3">Story Description</label>
                        <input value=" {{ $story->dec3 }} " name="dec3" class="form-control" id="lastName2" type="text" placeholder="Enter Groom Description">
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