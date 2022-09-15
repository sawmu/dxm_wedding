
@extends('admin.admin_master')

@section('admin')
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-title mb-3">Form Inputs Rounded</div>
            <form>
                <div class="row">
                    <div class="col-md-6 form-group mb-3">
                        <label for="firstName2">First name</label>
                        <input class="form-control form-control-rounded" id="firstName2" type="text" placeholder="Enter your first name">
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="lastName2">Last name</label>
                        <input class="form-control form-control-rounded" id="lastName2" type="text" placeholder="Enter your last name">
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="exampleInputEmail2">Email address</label>
                        <input class="form-control form-control-rounded" id="exampleInputEmail2" type="email" placeholder="Enter email">
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="phone1">Phone</label>
                        <input class="form-control form-control-rounded" id="phone1" placeholder="Enter phone">
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="credit2">Cradit card number</label>
                        <input class="form-control form-control-rounded" id="credit2" placeholder="Card">
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="website2">Website</label>
                        <input class="form-control form-control-rounded" id="website2" placeholder="Web address">
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="picker3">Birth date</label>
                        <input class="form-control form-control-rounded" id="picker3" placeholder="yyyy-mm-dd" name="dp">
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="picker1">Select</label>
                        <select class="form-control form-control-rounded">
                            <option>Option 1</option>
                            <option>Option 1</option>
                            <option>Option 1</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection