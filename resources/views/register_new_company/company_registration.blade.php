@extends('layouts.main.app')

@section('content')
    <div class="card text-dark bg-light mb-3">
        <div class="card-header">Company Registration</div>
        <div class="card-body text-secondary">
            <!-- <h5 class="card-title">Secondary card title</h5> -->
            <form>
                <div class="row mb-3">
                    <label for="inputCompanyName" class="col-sm-2 col-form-label">Company Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputCompanyName" placeholder="Company Name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputCompanyAddress" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputCompanyAddress" placeholder="Company Address">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputCompanyCity" class="col-sm-2 col-form-label">City/Town</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputCompanyCity" placeholder="Company City/Town">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputCompanyPostcode" class="col-sm-2 col-form-label">Postcode</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="inputCompanyPostcode" placeholder="EG : 15200">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="status" class="col-sm-2 col-form-label">State</label>
                    <div class="col-sm-6">
                        <select class="form-select" id="state" aria-label="Please Select">
                            <option selected disabled>Please Select</option>
                            <option value="1">Abu Dhabi</option>
                            <option value="2">Brunei Darussalam</option>
                            <option value="3">Cambodia</option>
                            <option value="4">India</option>
                            <option value="5">Indonesia</option>
                            <option value="6">Japan</option>
                            <option value="7">Johor</option>
                            <option value="8">Kelantan</option>
                            <option value="9">Laos</option>
                            <option value="10">Melaka</option>
                            <option value="11">Mongolia</option>
                            <option value="12">Myanmar</option>
                            <option value="13">Negeri Sembilan</option>
                            <option value="14">Pahang</option>
                            <option value="15">Perak</option>
                            <option value="16">Perlis</option>
                            <option value="17">Philipines</option>
                            <option value="18">Pulau Pinang</option>
                            <option value="19">Sabah</option>
                            <option value="20">Sarawak</option>
                            <option value="21">Selangor</option>
                            <option value="22">Singapore</option>
                            <option value="23">Terengganu</option>
                            <option value="24">Thailand</option>
                            <option value="25">Vienna Austria</option>
                            <option value="26">Wilayah Kuala Lumpur</option>
                            <option value="27">Wilayah Persekutuan Labuan</option>
                            <option value="28">Wilayah Persekutuan Putrajaya</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="license" class="col-sm-2 col-form-label">License No.</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="license" placeholder="License No.">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="telephone" class="col-sm-2 col-form-label">Telephone</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="telephone" placeholder="Telephone">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ext" class="col-sm-2 col-form-label">Ext</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="ext" placeholder="Ext">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="fax" class="col-sm-2 col-form-label">Fax</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="fax" placeholder="Fax">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="contact" class="col-sm-2 col-form-label">Contact Person</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" id="contact" placeholder="Contact Person">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="mobile" class="col-sm-2 col-form-label">Mobile No.</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" id="mobile" placeholder="EX : 0199169169">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="codeActivity" class="col-sm-2 col-form-label">Code Activity</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" id="codeActivity" placeholder="EX : 1/2/3/4/5/6/7">
                    </div>
                </div>
                {{-- <div class="row mb-3">
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
                </div> --}}

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 offset-sm-2">
                        <a href="" class="btn btn-secondary">Reset</a>
                        <button type="submit" class="btn btn-primary"> Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
