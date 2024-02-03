@extends('layouts.master')
@section('content')
    {{-- <div class="row">
    <div class="col-12">
        <div class="card card-background card-background-after-none align-items-start mt-4 mb-5">
            <div class="full-background"
                style="background-image: url('../assets/img/header-blue-purple.jpg')"></div>
            <div class="card-body text-start p-4 w-100">
                <h3 class="text-white mb-2">Collect your benefits 🔥</h3>
                <p class="mb-4 font-weight-semibold">
                    Check all the advantages and choose the best.
                </p>
                <button type="button"
                    class="btn btn-outline-white btn-blur btn-icon d-flex align-items-center mb-0">
                    <span class="btn-inner--icon">
                        <svg width="14" height="14" viewBox="0 0 14 14"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="d-block me-2">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14ZM6.61036 4.52196C6.34186 4.34296 5.99664 4.32627 5.71212 4.47854C5.42761 4.63081 5.25 4.92731 5.25 5.25V8.75C5.25 9.0727 5.42761 9.36924 5.71212 9.52149C5.99664 9.67374 6.34186 9.65703 6.61036 9.47809L9.23536 7.72809C9.47879 7.56577 9.625 7.2926 9.625 7C9.625 6.70744 9.47879 6.43424 9.23536 6.27196L6.61036 4.52196Z" />
                        </svg>
                    </span>
                    <span class="btn-inner--text">Watch more</span>
                </button>
                <img src="../assets/img/3d-cube.png" alt="3d-cube"
                    class="position-absolute top-0 end-1 w-25 max-width-200 mt-n6 d-sm-block d-none" />
            </div>
        </div>
    </div>
</div> --}}
    <div class="row">
        <div class="col-12">
            <div class="card border shadow-xs mb-4">
                <div class="card-header border-bottom pb-0">
                    <div class="d-sm-flex align-items-center">
                        <div>
                            <h6 class="font-weight-semibold text-lg mb-0">Members list</h6>
                            <p class="text-sm">See information about all members</p>
                        </div>
                        <div class="ms-auto d-flex">
                            <button type="button" class="btn btn-sm btn-white me-2">
                                View all
                            </button>
                            <a href="{{ url('superAdmin/users/create') }}"
                                class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2">
                                <span class="btn-inner--icon">
                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="currentColor" class="d-block me-2">
                                        <path
                                            d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z" />
                                    </svg>
                                </span>
                                <span class="btn-inner--text">Add member</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 py-0">
                    <div class="border-bottom py-3 px-3 d-sm-flex align-items-center">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable1"
                            autocomplete="off">
                        <a href="{{url('superAdmin/users')}}" class="btn btn-white px-3 mb-0" for="btnradiotable1">All</a>
                        <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable2"
                            autocomplete="off">
                        <a href="{{url('superAdmin/users?user_status=pending_user')}}" class="btn btn-white px-3 mb-0" for="btnradiotable2">Pending Member</a>
                        <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable3"
                            autocomplete="off">
                        <a href="{{url('superAdmin/users?user_status=admin_approved_user')}}" class="btn btn-white px-3 mb-0" for="btnradiotable3">Admin Approved Member</a>
                        <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable3"
                            autocomplete="off">
                        <a href="{{url('superAdmin/users?user_status=superAdmin_approved_user')}}" class="btn btn-white px-3 mb-0" for="btnradiotable3">SuperAdmin Approved Member</a>
                        </div>
                        <div class="input-group w-sm-25 ms-auto">
                            <span class="input-group-text text-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                    </path>
                                </svg>
                            </span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </div>
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-7">Member
                                    </th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">
                                        Member Type</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">
                                        Membership Expiry</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                        User Status</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                        Birthday</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                        Phone</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                        Address</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold ">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex align-items-center">
                                                    @if ($user->user_image != null)
                                                        <a target="blink"
                                                            href="{{ asset("storage/user-image/$user->user_image") }}">
                                                            <img src="{{ asset("storage/user-image/$user->user_image") }}"
                                                                class="avatar avatar-sm rounded-circle me-2" alt="user1">
                                                        </a>
                                                    @else
                                                        <img src="../assets/img/team-2.jpg"
                                                            class="avatar avatar-sm rounded-circle me-2" alt="user1">
                                                    @endif
                                                </div>
                                                <div class="d-flex flex-column justify-content-center ms-1">
                                                    <h6 class="mb-0 text-sm font-weight-semibold">{{ $user->name }}</h6>
                                                    <p class="text-sm text-secondary mb-0">{{ $user->email }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-md-4">
                                                @include('components.partials.membership-model-box')
                                                <button type="button" class="btn btn-sm btn-block btn-white mb-3"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="{{"#membership-model-box-$user->id"}}">{{ $user->userHasMemberType->name }}</button>

                                            </div>

                                            {{-- <p class="text-sm text-dark font-weight-semibold mb-0">
                                                {{ $user->userHasMemberType->name }}</p> --}}
                                            {{-- <p class="text-sm text-secondary mb-0">Organization</p> --}}
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-sm font-weight-normal"><b>{{ $user->membership_expiry }}</b></span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="col-md-4">

                                                @include('components.partials.super-admin-approve-model-box')
                                                <button type="button" @if ($user->user_status == 'superAdmin_approved_user') disabled @endif
                                                    class="btn btn-sm btn-block btn-dark mb-3" data-bs-toggle="modal"
                                                    data-bs-target="{{"#super-admin-approve-model-$user->id"}}">{{ $user->user_status }}</button>

                                            </div>
                                            {{-- <span
                                                class="badge badge-sm border border-success text-success bg-success">{{$user->user_status}}</span> --}}
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-sm font-weight-normal">{{ $user->birthday }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-sm font-weight-normal">{{ $user->phone }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-sm font-weight-normal">{{ $user->address }}</span>
                                        </td>

                                        <td class="d-flex gap-2">
                                            <a href="{{ url("superAdmin/users/send-email/$user->id") }}"
                                                class="btn btn-sm btn-info">
                                                Send Email
                                            </a>
                                            <a href="{{ url("superAdmin/users/certificate/$user->id") }}"
                                                class="btn btn-sm btn-info">
                                                User Certificate
                                            </a>
                                            <a class="btn btn-sm" href="{{ url("superAdmin/users/$user->id/edit") }}"
                                                class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip"
                                                data-bs-title="Edit user">
                                                <svg width="14" height="14" viewBox="0 0 15 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z"
                                                        fill="#64748B" />
                                                </svg>
                                            </a>
                                            <a class="btn btn-sm" href="{{ url("superAdmin/users/$user->id") }}"
                                                class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip"
                                                data-bs-title="Show User">
                                                <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path
                                                        d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                                </svg>
                                            </a>
                                            <form method="POST" action="{{ url("superAdmin/users/$user->id") }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger btn-icon px-3 me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach




                            </tbody>
                        </table>
                    </div>
                    <div class="border-top py-3 px-3 d-flex align-items-center">
                        <p class="font-weight-semibold mb-0 text-dark text-sm">Page {{ $users->currentPage() }} of
                            {{ $users->lastPage() }}</p>
                        <div class="ms-auto">
                            {{-- @if ($users->previousPageUrl())
                                <a href="{{ $users->previousPageUrl() }}" class="btn btn-sm btn-white mb-0">Previous</a>
                            @endif
                                {{dd($users)}}
                            @if ($users->nextPageUrl())
                                <a href="{{ $users->nextPageUrl() }}" class="btn btn-sm btn-white mb-0">Next</a>
                            @endif --}}
                            {{ $users->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
    <div class="col-12">
        <div class="card border shadow-xs mb-4">
            <div class="card-header border-bottom pb-0">
                <div class="d-sm-flex align-items-center mb-3">
                    <div>
                        <h6 class="font-weight-semibold text-lg mb-0">Recent transactions</h6>
                        <p class="text-sm mb-sm-0">These are details about the last transactions</p>
                    </div>
                    <div class="ms-auto d-flex">
                        <div class="input-group input-group-sm ms-auto me-2">
                            <span class="input-group-text text-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                    </path>
                                </svg>
                            </span>
                            <input type="text" class="form-control form-control-sm"
                                placeholder="Search">
                        </div>
                        <button type="button"
                            class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0 me-2">
                            <span class="btn-inner--icon">
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="d-block me-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg>
                            </span>
                            <span class="btn-inner--text">Download</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 py-0">
                <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="text-secondary text-xs font-weight-semibold opacity-7">
                                    Transaction</th>
                                <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">
                                    Amount</th>
                                <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Date
                                </th>
                                <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">
                                    Status</th>
                                <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">
                                    Account</th>
                                <th
                                    class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                                            <img src="../assets/img/small-logos/logo-spotify.svg"
                                                class="w-80" alt="spotify">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Spotify</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-normal mb-0">$2,500</p>
                                </td>
                                <td>
                                    <span class="text-sm font-weight-normal">Wed 3:00pm</span>
                                </td>
                                <td>
                                    <span
                                        class="badge badge-sm border border-success text-success bg-success">
                                        <svg width="9" height="9" viewBox="0 0 10 9"
                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                            stroke="currentColor" class="me-1">
                                            <path d="M1 4.42857L3.28571 6.71429L9 1" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Paid
                                    </span>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex">
                                        <div
                                            class="border px-1 py-1 text-center d-flex align-items-center border-radius-sm my-auto">
                                            <img src="../assets/img/logos/visa.png" class="w-90 mx-auto"
                                                alt="visa">
                                        </div>
                                        <div class="ms-2">
                                            <p class="text-dark text-sm mb-0">Visa 1234</p>
                                            <p class="text-secondary text-sm mb-0">Expiry 06/2026</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                        data-bs-toggle="tooltip" data-bs-title="Edit user">
                                        <svg width="14" height="14" viewBox="0 0 15 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z"
                                                fill="#64748B" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                                            <img src="../assets/img/small-logos/logo-invision.svg"
                                                class="w-80" alt="invision">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Invision</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-normal mb-0">$5,000</p>
                                </td>
                                <td>
                                    <span class="text-sm font-weight-normal">Wed 1:00pm</span>
                                </td>
                                <td>
                                    <span
                                        class="badge badge-sm border border-success text-success bg-success">
                                        <svg width="9" height="9" viewBox="0 0 10 9"
                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                            stroke="currentColor" class="me-1">
                                            <path d="M1 4.42857L3.28571 6.71429L9 1" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Paid
                                    </span>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex">
                                        <div
                                            class="border px-1 py-1 text-center d-flex align-items-center border-radius-sm my-auto">
                                            <img src="../assets/img/logos/mastercard.png"
                                                class="w-90 mx-auto" alt="mastercard">
                                        </div>
                                        <div class="ms-2">
                                            <p class="text-dark text-sm mb-0">Mastercard 1234</p>
                                            <p class="text-secondary text-sm mb-0">Expiry 06/2026</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                        data-bs-toggle="tooltip" data-bs-title="Edit user">
                                        <svg width="14" height="14" viewBox="0 0 15 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z"
                                                fill="#64748B" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                                            <img src="../assets/img/small-logos/logo-jira.svg"
                                                class="w-80" alt="jira">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Jira</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-normal mb-0">$3,400</p>
                                </td>
                                <td>
                                    <span class="text-sm font-weight-normal">Mon 7:40pm</span>
                                </td>
                                <td>
                                    <span
                                        class="badge badge-sm border border-warning text-warning bg-warning">
                                        <svg width="12" height="12"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" class="me-1ca">
                                            <path fill-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Pending
                                    </span>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex">
                                        <div
                                            class="border px-1 py-1 text-center d-flex align-items-center border-radius-sm my-auto">
                                            <img src="../assets/img/logos/mastercard.png"
                                                class="w-90 mx-auto" alt="mastercard">
                                        </div>
                                        <div class="ms-2">
                                            <p class="text-dark text-sm mb-0">Mastercard 1234</p>
                                            <p class="text-secondary text-sm mb-0">Expiry 06/2026</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                        data-bs-toggle="tooltip" data-bs-title="Edit user">
                                        <svg width="14" height="14" viewBox="0 0 15 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z"
                                                fill="#64748B" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                                            <img src="../assets/img/small-logos/logo-slack.svg"
                                                class="w-80" alt="slack">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Slack</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-normal mb-0">$1,000</p>
                                </td>
                                <td>
                                    <span class="text-sm font-weight-normal">Wed 5:00pm</span>
                                </td>
                                <td>
                                    <span
                                        class="badge badge-sm border border-success text-success bg-success">
                                        <svg width="9" height="9" viewBox="0 0 10 9"
                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                            stroke="currentColor" class="me-1">
                                            <path d="M1 4.42857L3.28571 6.71429L9 1" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Paid
                                    </span>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex">
                                        <div
                                            class="border px-1 py-1 text-center d-flex align-items-center border-radius-sm my-auto">
                                            <img src="../assets/img/logos/visa.png" class="w-90 mx-auto"
                                                alt="visa">
                                        </div>
                                        <div class="ms-2">
                                            <p class="text-dark text-sm mb-0">Visa 1234</p>
                                            <p class="text-secondary text-sm mb-0">Expiry 06/2026</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                        data-bs-toggle="tooltip" data-bs-title="Edit user">
                                        <svg width="14" height="14" viewBox="0 0 15 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z"
                                                fill="#64748B" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                                            <img src="../assets/img/small-logos/logo-webdev.svg"
                                                class="w-80" alt="webdev">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Webdev</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-normal mb-0">$14,000</p>
                                </td>
                                <td>
                                    <span class="text-sm font-weight-normal">Wed 3:30am</span>
                                </td>
                                <td>
                                    <span
                                        class="badge badge-sm border border-success text-success bg-success">
                                        <svg width="9" height="9" viewBox="0 0 10 9"
                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                            stroke="currentColor" class="me-1">
                                            <path d="M1 4.42857L3.28571 6.71429L9 1" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Paid
                                    </span>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex">
                                        <div
                                            class="border px-1 py-1 text-center d-flex align-items-center border-radius-sm my-auto">
                                            <img src="../assets/img/logos/visa.png" class="w-90 mx-auto"
                                                alt="visa">
                                        </div>
                                        <div class="ms-2">
                                            <p class="text-dark text-sm mb-0">Visa 1234</p>
                                            <p class="text-secondary text-sm mb-0">Expiry 06/2026</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                        data-bs-toggle="tooltip" data-bs-title="Edit user">
                                        <svg width="14" height="14" viewBox="0 0 15 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z"
                                                fill="#64748B" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div class="avatar avatar-sm rounded-circle bg-gray-100 me-2 my-2">
                                            <img src="../assets/img/small-logos/logo-xd.svg"
                                                class="w-80" alt="xd">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Adobe XD</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-normal mb-0">$2,300</p>
                                </td>
                                <td>
                                    <span class="text-sm font-weight-normal">Tue 3:30pm</span>
                                </td>
                                <td>
                                    <span
                                        class="badge badge-sm border border-danger text-danger bg-danger">
                                        <svg width="12" height="12"
                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="me-1">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                        Canceled
                                    </span>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex">
                                        <div
                                            class="border px-1 py-1 text-center d-flex align-items-center border-radius-sm my-auto">
                                            <img src="../assets/img/logos/mastercard.png"
                                                class="w-90 mx-auto" alt="mastercard">
                                        </div>
                                        <div class="ms-2">
                                            <p class="text-dark text-sm mb-0">Mastercard 1234</p>
                                            <p class="text-secondary text-sm mb-0">Expiry 06/2026</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                        data-bs-toggle="tooltip" data-bs-title="Edit user">
                                        <svg width="14" height="14" viewBox="0 0 15 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z"
                                                fill="#64748B" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="border-top py-3 px-3 d-flex align-items-center">
                    <button class="btn btn-sm btn-white d-sm-block d-none mb-0">Previous</button>
                    <nav aria-label="..." class="ms-auto">
                        <ul class="pagination pagination-light mb-0">
                            <li class="page-item active" aria-current="page">
                                <span class="page-link font-weight-bold">1</span>
                            </li>
                            <li class="page-item"><a class="page-link border-0 font-weight-bold"
                                    href="javascript:;">2</a></li>
                            <li class="page-item"><a
                                    class="page-link border-0 font-weight-bold d-sm-inline-flex d-none"
                                    href="javascript:;">3</a></li>
                            <li class="page-item"><a class="page-link border-0 font-weight-bold"
                                    href="javascript:;">...</a></li>
                            <li class="page-item"><a
                                    class="page-link border-0 font-weight-bold d-sm-inline-flex d-none"
                                    href="javascript:;">8</a></li>
                            <li class="page-item"><a class="page-link border-0 font-weight-bold"
                                    href="javascript:;">9</a></li>
                            <li class="page-item"><a class="page-link border-0 font-weight-bold"
                                    href="javascript:;">10</a></li>
                        </ul>
                    </nav>
                    <button class="btn btn-sm btn-white d-sm-block d-none mb-0 ms-auto">Next</button>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
