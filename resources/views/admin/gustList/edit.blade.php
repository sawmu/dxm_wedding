
@extends('admin.admin_master')

@section('admin')
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-title mb-3">Gust Information</div>
            <form action="{{ url('admin/gust-list/update/'.$gust->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row"></div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="BrideName">Full Name</label>
                        <input value=" {{ $gust->fullname }} " name="fullname" class="form-control " id="fullname" type="text" placeholder="Enter Full Name">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="GroomName">Phone</label>
                        <input value=" {{ $gust->phone }} " name="phone" class="form-control" id="phone" type="text" placeholder="Enter Phone Number">
                    </div>

                    {{-- <div class="col-md-12 form-group mb-3">
                        <label for="Sign">How do you know us?</label>
                        <select name="knowus" class="form-control" value=" {{ $gust->knowus }} ">
                            <option disabled="disabled" selected>How do you know us?</option>
                                <option>Church</option>
                                <option>Work</option>
                                <option>Bride's Relatives</option>
                                <option>Groom's Relatives</option>
                        </select>
                    </div>

                    <div class="col-md-12 form-group mb-3">
                        <label for="picker1">Attending</label>
                        <select name="attending" class="form-control"  value=" {{ $gust->attending }} ">
                            <option disabled="disabled" selected>Attending</option>
                                <option>Yes</option>
                                <option>Join Live Stream</option>
                        </select>
                    </div>

                    <div class="col-md-12 form-group mb-3">
                        <label for="picker1">Meal Preferences</label>
                        <select name="no_guests" class="form-control" ">
                            <option value="4" {{ $gust->no_guests == 4 ? 'selected' : '' }}>Meal Preferences</option>
                            <option value="1" {{ $gust->no_guests == 1 ? 'selected' : '' }}>Classic Beef A La Bourguignon</option>
                            <option value="2" {{ $gust->no_guests == 2 ? 'selected' : '' }}>Baked Miso Salmon</option>
                            <option value="3" {{ $gust->no_guests == 3 ? 'selected' : '' }}>HALAL</option>
                        </select>
                    </div> --}}
                    
                    
                    

                    <div class="col-md-12 form-group mb-3">
                        <label for="picker2">Table</label>
                        <select name="table" class="form-control" value=" {{ $gust->table }} ">
                            <option>Choose Table</option>
                            <option>VIP-1</option>
                            <option>VIP-2</option>
                            <option>Table-1</option>
                            <option>Table-2</option>.
                            <option>Table-3</option>
                            <option>Table-4</option>
                            <option>Table-5</option>
                            <option>Table-6</option>.
                            <option>Table-7</option>
                            <option>Table-8</option>
                            <option>Table-9</option>.
                            <option>Table-10</option>
                            <option>Table-11</option>
                            <option>Table-12</option>
                            <option>Table-13</option>.
                            <option>Table-14</option>
                            <option>Table-15</option>
                        </select>
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