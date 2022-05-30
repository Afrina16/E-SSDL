@extends('layouts.main.app')

@section('content')

<div class="card text-dark bg-light mb-3">
    <div class="card-header">Search Company by Status</div>
    <div class="card-body text-secondary">
        <!-- <h5 class="card-title">Secondary card title</h5> -->
        <form>
           
            <div class="row mb-3">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-6">
                    <select class="form-select" id="status" aria-label="Please Select">
                        <option selected disabled>--Please Select--</option>
                        <option value="1">Active</option>
                        <option value="2">Approved</option>
                        <option value="3">Mark For Deletion</option>
                        <option value="3">Not Active</option>
                    </select>
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