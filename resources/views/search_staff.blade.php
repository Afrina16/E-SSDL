@extends('layouts.main.app')

@section('content')

<div class="card text-dark bg-light mb-3">
    <div class="card-header">Company & Stuff : Search Staff</div>
    <div class="card-body text-secondary">
        <form>
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="ic" class="col-sm-2 col-form-label">IC/Passport No</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ic" placeholder="IC/ Passport No.">
                </div>
            </div>
            <div class="row mb-3">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-select" id="status" aria-label="Please Select">
                        <option selected disabled>Please Select</option>
                        <option value="1">Active</option>
                        <option value="2">Approved</option>
                        <option value="3">Mark For Deletion</option>
                        <option value="3">Not Active</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="userId" class="col-sm-2 col-form-label">User Id</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="userId" placeholder="User ID">
                </div>
            </div>
            <div class="row mb-3">
                <label for="registrationDate" class="col-sm-2 col-form-label">Registration Date</label>
                    <div class="col-auto">
                        <input type="date" class="form-control" id="registrationDate" placeholder="Start Date">
                    </div>
                    <div class="col-auto">To</div>
                    <div class="col-auto">
                        <input type="date" class="form-control" id="registrationDate" placeholder="End Date">
                    </div>
            </div>
            <div class="row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection