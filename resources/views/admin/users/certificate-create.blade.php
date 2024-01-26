@extends('layouts.master')
@section('content')
    <div class="">
        <h3>User Certificate Create Form</h3>
    </div>
    <form action="{{ url("superAdmin/users/certificate/$user->id/create") }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="certificate_name">Certificate Name</label>
                    <input type="text" class="form-control" name="certificate_name" id="certificate_name"
                        placeholder="Certificate Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="user_id">User ID</label>
                    <select id="user_id" name="user_id" disabled class="form-select"
                        aria-label="Default select example">
                        <option selected>{{ $user->name }}</option>

                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="issue_date">Issue Date</label>
                    <input type="date" name="issue_date" class="form-control" id="issue_date" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="expiry_date">Expiry Date</label>
                    <input type="date" name="expiry_date" class="form-control" id="expiry_date" />
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="certificate_image">Certificate Image</label>
                    <input type="file" name="certificate_image" class="form-control" id="certificate_image">
                </div>
            </div>
        </div>



        {{-- <div class="row">
            <div class="col-md-6">
                <div class="form-group has-success">
                    <input type="text" placeholder="Success" class="form-control is-valid" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <input type="email" placeholder="Error Input" class="form-control is-invalid" />
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col">
                <button class="btn btn-success">Create</button>
            </div>
        </div>
    </form>
@endsection
