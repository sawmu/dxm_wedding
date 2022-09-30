
@extends('admin.admin_master')

@section('admin')
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-title mb-3">Gust Information</div>
            <form action="{{ route('store.gustList') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row"></div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="BrideName">Full Name</label>
                        <input name="fullname" class="form-control " id="fullname" type="text" placeholder="Enter Full Name">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="GroomName">Phone</label>
                        <input name="phone" class="form-control" id="phone" type="text" placeholder="Enter Phone Number">
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label for="Sign">How do you know us?</label>
                        <input name="knowus" class="form-control" id="knowus" type="text" placeholder="Enter Name">
                    </div>

                    <div class="col-md-12 form-group mb-3">
                        <label for="picker1">Invited Gusets</label>
                        <select name="no_guests" class="form-control">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                    
                    <div class="col-md-12 form-group mb-3">
                        <label for="picker1">Attending</label>
                        <select name="attending" class="form-control">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    

                    <div class="col-md-12 form-group mb-3">
                        <label for="picker2">Table</label>
                        <select name="table" class="form-control">
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
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection