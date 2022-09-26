
@extends('admin.admin_master')

@section('admin')
<div class="col-md-12">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-3">About Us</h4>
                <a href="{{ route('add.aboutus')}}"><button class="btn btn-info"> Add About Us </button></a>
            
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
                                <th scope="col">Bride Description</th>
                                <th scope="col">Bride Image</th>
                                <th scope="col">Groom Name</th>
                                <th scope="col">Groom Description</th>
                                <th scope="col">Groom Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aboutus as $about)
                            <tr>
                                <th scope="row">{{ $about->brideName }}</th>
                                <td>{{ $about->brideDesc}}</td>
                                <td><img class="rounded-circle m-0 avatar-sm-table" src="../../{{ $about->brideImage}}" alt="{{ $about->brideName }}"></td>

                                <td>{{ $about->groomName}}</td>
                                <td>{{ $about->groomDesc}}</td>
                                <td><img class="rounded-circle m-0 avatar-sm-table" src="../../{{ $about->groomImage}}" alt="{{ $about->groomName}}"></td>
                                
                                <td>
                                    <button class="btn btn-success" type="button"><a class="" href=" {{ url('admin/design/aboutus/edit/'.$about->id)}} "><i class="fa-solid fa-pen-fancy"></i></a></button>
                                    <button class="btn btn-danger" type="button"><a onclick="return confirm('Are you sure to delete')" href=" {{ url('admin/design/aboutus/delete/'.$about->id)}} "> <i class="fa-regular fa-rectangle-xmark"></i> </a></button>
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