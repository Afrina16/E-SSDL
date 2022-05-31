@extends('layouts.main.app')

@section('content')

<div class="card text-dark bg-light mb-3">
    <div class="card-header">Search OSL</div>
    <div class="card-body text-secondary">
        <form>
            <div class="row mb-3">
                <label for="PIN" class="col-sm-2 col-form-label">PIN Code</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="PIN" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="oslCode" class="col-sm-2 col-form-label">OSL Code</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="oslCode" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="userID" class="col-sm-2 col-form-label">User ID</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="userID" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="CID" class="col-sm-2 col-form-label">CID</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="CID" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="statusOSL" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-4">
                    <select class="form-select" id="statusOSL" aria-label="Please Select">
                        <option selected disabled>Please Select</option>
                        <option value="1">OD READ</option>
                        <option value="2">RECEIVED</option>
                        <option value="3">SENT</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="sendDate" class="col-sm-2 col-form-label">Sent Date</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" id="sendDate" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="receivedDate" class="col-sm-2 col-form-label">Received Date</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" id="receivedDate" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="limit" class="col-sm-2 col-form-label">Limit</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="limit" placeholder="ext. 50">
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