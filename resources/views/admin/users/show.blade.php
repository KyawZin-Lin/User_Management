@extends('layouts.master')
@section('content')
    <div class="pt-7 pb-6 bg-cover"
        style="background-image: url('{{ asset('assets/img/header-orange-purple.jpg') }}'); background-position: bottom;">
    </div>
    <div class="container">
        <div class="card card-body py-2 bg-transparent shadow-none">
            <div class="row">
                <div class="col-auto">
                    <div class="avatar avatar-2xl rounded-circle position-relative mt-n7 border border-gray-100 border-4">
                        @if($user->user_image != NULL)
                        <img src="{{ asset("storage/user-image/$user->user_image") }}" alt="profile_image" class="w-100">
                        @else
                        <img src="{{ asset("assets/img/team-2.jpg") }}" alt="profile_image" class="w-100">
                        @endif

                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h3 class="mb-0 font-weight-bold">
                            {{ $user->name }}'s Card
                        </h3>
                        <p class="mb-0">
                            {{ $user->email }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 text-sm-end">
                    <a href="{{url('admin/users')}}" class="btn btn-sm btn-white">Back</a>
                    <a href="{{url("admin/users/certificate/$user->id/show")}}" class="btn btn-sm btn-dark">User Certificate</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-12 mb-4">
        <div class="card border shadow-xs h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">

                    <div class="col-md-5 col-3 text-end">
                        {{-- <button type="button" class="btn btn-white btn-icon px-2 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                            </svg>
                        </button> --}}
                        {{-- {!!DNS2D::getBarcodeHTML('4445645656', 'QRCODE') !! } --}}
                        <div class="barcode">
                            {!! DNS2D::getBarcodeHTML("UserName : $user->name and Contact : $user->phone", 'QRCODE', 4, 4) !!}
                        </div>

                    </div>
                    <div class="col-md-5 col-10 folat-end">
                        <h6 class="mb-0 font-weight-semibold text-lg">Profile information</h6>
                        <p class="text-sm mb-1">Edit the information about you.</p>
                    </div>
                </div>
            </div>
            <div class="card-body p-3">
                <p class="text-sm mb-4">
                    Hi, I’m {{$user->name}}, Decisions: If you can’t decide, the answer is no. If two equally difficult paths,
                    choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
                </p>
                <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pt-0 pb-1 text-sm"><span
                            class="text-secondary">Name:</span> &nbsp; {{$user->name}}</li>
                    <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm"><span
                            class="text-secondary">Email:</span> &nbsp; {{$user->email}}</li>
                    <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm"><span
                            class="text-secondary">Phone:</span> &nbsp; {{$user->phone}}</li>
                    <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm"><span
                            class="text-secondary">Address:</span> &nbsp; {{$user->address}}</li>
                    <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm"><span
                            class="text-secondary">Member Type:</span> &nbsp; {{$user->userHasMemberType->name}}</li>
                    <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
                        <span class="text-secondary">Social:</span> &nbsp;
                        <a class="btn btn-link text-dark mb-0 ps-1 pe-1 py-0" href="javascript:;">
                            <i class="fab fa-linkedin fa-lg"></i>
                        </a>
                        <a class="btn btn-link text-dark mb-0 ps-1 pe-1 py-0" href="javascript:;">
                            <i class="fab fa-github fa-lg"></i>
                        </a>
                        <a class="btn btn-link text-dark mb-0 ps-1 pe-1 py-0" href="javascript:;">
                            <i class="fab fa-slack fa-lg"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
