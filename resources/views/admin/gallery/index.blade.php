
@extends('admin.admin_master')

@section('admin')
<div class="col-md-12">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-3">Gallery</h4>
                <a href="{{ route('add.gallery')}}"><button class="btn btn-info"> Add Gallery </button></a>
            
                <div class="table-responsive pt-3">
                    @if (session('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('success')}}
                        </div>   
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gallerys as $key => $gallery)
                            <tr>
                                {{-- <td scope="row">{{$key}}</td> --}}
                                <td scope="row">{{ $gallerys->firstItem()+$loop->index }}</td>
                                <td><img class="rounded m-0 avatar-md-table" height="200px" width="200px" src="../../{{ $gallery->image}}" alt="profile_image"></td>
                                
                                <td>
                                    <button class="btn btn-success" type="button"><a class="" href=" {{ url('admin/gallery/edit/'.$gallery->id)}} "><i class="nav-icon i-Pen-2"></i></a></button>
                                    <button class="btn btn-danger" type="button"><a onclick="return confirm('Are you sure to delete')" href=" {{ url('admin/gallery/delete/'.$gallery->id)}} "> <i class="nav-icon i-Close-Window"></i> </a></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="container ">
                        {{ $gallerys->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection