@extends('layouts.main.app')

@section('content')

<div class="card text-dark bg-light mb-3">
    <div class="card-header">Company & Stuff : Search Company</div>
    <div class="card-body text-secondary">
        <!-- <h5 class="card-title">Secondary card title</h5> -->
        <form>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
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
                <label for="cid" class="col-sm-2 col-form-label">CID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="cid" placeholder="CID">
                </div>
            </div>
            <div class="row mb-3">
                <label for="codeActivity" class="col-sm-2 col-form-label">Code Activity</label>
                <div class="col-sm-10">
                    <select class="form-select" id="codeActivity" aria-label="Please Select">
                        <option selected disabled>Please Select</option>
                        <option value="1">00 - Not Define</option>
                        <option value="2">01 - NTD</option>
                        <option value="3">02 - Industry</option>
                        <option value="3">03 - Medical</option>
                    </select>
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