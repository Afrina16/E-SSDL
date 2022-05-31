@extends('layouts.main.app')

@section('content')

<div class="card text-dark bg-light mb-3">
    <div class="card-header">Print Report OSL Received</div>
    <div class="card-body text-secondary">
        <form>
            <div class="row mb-3">
                <label for="batch" class="col-sm-2 col-form-label">Batch</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="batch" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="receivedDate" class="col-sm-2 col-form-label">Received Date</label>
                <div class="col-auto">
                    <input type="date" class="form-control" id="receivedDate" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Print</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection