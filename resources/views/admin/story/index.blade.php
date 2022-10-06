
@extends('admin.admin_master')

@section('admin')
<div class="col-md-12">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-3">Our Story</h4>
                <a href="{{ route('add.story')}}"><button class="btn btn-info"> Add Story </button></a>
            
                <div class="table-responsive pt-3">
                    @if (session('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('success')}}
                        </div>   
                         @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Main Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Date</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Date</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Date</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($storys as $story)
                            <tr>
                                <th scope="row">{{ $story->SectionTitle }}</th>

                                <td><img class="rounded-circle m-0 avatar-sm-table" src="../../{{ $story->image1}}" alt="{{ $story->title1 }}"></td>
                                <th scope="row">{{ $story->title1 }}</th>
                                <td>{{ $story->date1}}</td>
                                <td>{{ $story->dec1}}</td>

                                <td><img class="rounded-circle m-0 avatar-sm-table" src="../../{{ $story->image2}}" alt="{{ $story->title2 }}"></td>
                                <th scope="row">{{ $story->title2 }}</th>
                                <td>{{ $story->date2}}</td>
                                <td>{{ $story->dec2}}</td>

                                <td><img class="rounded-circle m-0 avatar-sm-table" src="../../{{ $story->image3}}" alt="{{ $story->title3 }}"></td>
                                <th scope="row">{{ $story->title3 }}</th>
                                <td>{{ $story->date3}}</td>
                                <td>{{ $story->dec3}}</td>
                                
                                <td>
                                    <button class="btn btn-success" type="button"><a class="" href="{{ url('admin/design/story/edit/'.$story->id)}}"><i class="fa-solid fa-pen-fancy"></i></a></button>
                                    <button class="btn btn-danger" type="button"><a onclick="return confirm('Are you sure to delete')" href="  "> <i class="fa-regular fa-rectangle-xmark"></i> </a></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection