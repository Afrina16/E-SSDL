@extends('layouts.main.app')

@section('content')

<div class="card text-dark bg-light mb-3">
    <div class="card-header">Company & Staff :Search Staff And Area Monitor By FID</div>
    <div class="card-body text-secondary">
        <!-- <h5 class="card-title">Secondary card title</h5> -->
        <form>
           
            <div class="row mb-3">
                <label for="status" class="col-sm-2 col-form-label">USER ID: </label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="userid" placeholder="">
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