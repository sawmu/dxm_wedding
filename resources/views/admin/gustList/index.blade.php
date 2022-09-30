@extends('admin.admin_master')

@section('admin')

<div class="col-md-12 mb-4">
    <div class="card text-left">
        <div class="card-body">
            <div class="container">
                <h4 class="card-title mb-3">All Gust Lists</h4>
                <a href="{{ route('add.gustList')}}"><button class="btn btn-info"> Add Gust </button></a>
            </div>
            
           
            <div class="table-responsive">
                <div id="feature_disable_table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6">
               
            </div></div>
                <div class="row"><div class="col-sm-12"><table class="display table table-striped table-bordered dataTable" id="feature_disable_table" style="width: 100%;" role="grid">
                    @if (session('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('success')}}
                        </div>   
                    @endif
                    <thead>
                        <tr role="row">
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 10px;">No</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 76px;">Full Name</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 50px;">Phone</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 56px;">How do you know us?</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 73px;">Gusts Invited</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 73px;">Attending</th>               
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 72px;">Table</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 72px;">Action</th>
                        </tr>
                    </thead>
                    <tbody class="pagination-t">   
                  
                        @foreach ($gustLists as $gust)
                        
                            <tr role="row" id="">
                                    <td scope="row">{{ $gustLists->firstItem()+$loop->index }}</td>
                                    <td>{{$gust->fullname}}</td>
                                    <td>{{$gust->phone}}</td>
                                    <td>{{$gust->knowus}}</td>
                                    <td>{{$gust->no_guests}}</td>
                                    <td>{{$gust->attending}}</td>
                                    <td>{{$gust->table}}</td>
                                    <td>
                                        <button class="btn btn-success" type="button"><a class="" href="{{ url('admin/gust-list/edit/'.$gust->id)}}"><i class="nav-icon i-Pen-2"></i></a></button>
                                        <button class="btn btn-danger" type="button"><a onclick="return confirm('Are you sure to delete')" href="{{ url('admin/gust-list/delete/'.$gust->id)}}"> <i class="nav-icon i-Close-Window"></i> </a></button>
                                    </td>
                            </tr>
                            
                        @endforeach

                    

                   </tbody>
                  
                </table>
                <div class="container ">
                    {{ $gustLists->links() }}
                </div>
                
            </div>
           
            </div>
            
            </div>
            </div>
        </div>
    </div>
</div>


@endsection