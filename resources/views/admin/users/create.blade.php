@extends('layouts.master')
@section('content')

    <div class="">
        <h3>User Create Form</h3>
    </div>
    <form action="{{ url('superAdmin/users') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="User Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" placeholder="name@example.com" name="email" id="email" class="form-control" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="birthday">Birthday</label>
                    <input type="date" name="birthday" class="form-control" id="birthday" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="user_member_type_id">User Member Type</label>
                    <select id="user_member_type_id" name="user_member_type_id" class="form-select" aria-label="Default select example">
                        <option selected>Select Member Type</option>
                       @foreach ($memberTypes as $memberType)
                       <option value="{{$memberType->id}}">{{$memberType->name}}</option>
                       @endforeach

                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" class="form-control" id="phone" placeholder="User phone">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Address</label>
                    <input type="text" name="address" placeholder="User Address" id="address" class="form-control" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">User Image</label>
                    <input type="file"  name="image" class="form-control" id="image" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="User Password" id="password" class="form-control" />
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
