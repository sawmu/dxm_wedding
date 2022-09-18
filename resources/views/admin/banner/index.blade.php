
@extends('admin.admin_master')

@section('admin')
<div class="col-md-12">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-3">Banner Information</h4>
                <a href="{{ route('add.banner')}}"><button class="btn btn-info"> Add Banner </button></a>
            
                <div class="table-responsive pt-3">
                    @if (session('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('success')}}
                        </div>   
                         @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Bride Name</th>
                                <th scope="col">Character</th>
                                <th scope="col">Groom Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $banner)
                            <tr>
                                <th scope="row">{{ $banner->title_one }}</th>
                                <td>{{ $banner->sign}}</td>
                                <td>{{ $banner->title_two}}</td>
                                <td>{{ $banner->subtitle}}</td>
                                <td><img class="rounded-circle m-0 avatar-sm-table" src="../{{ $banner->image}}" alt="profile_image"></td>
                                
                                <td>
                                    <button class="btn btn-success" type="button"><a class="" href=" {{ url('admin/banner/edit/'.$banner->id)}} "><i class="nav-icon i-Pen-2"></i></a></button>
                                    <button class="btn btn-danger" type="button"><a onclick="return confirm('Are you sure to delete')" href=" {{ url('admin/banner/delete/'.$banner->id)}} "> <i class="nav-icon i-Close-Window"></i> </a></button>
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