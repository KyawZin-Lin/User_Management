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
                        @if ($user->user_image != null)
                            <img src="{{ asset("storage/user-image/$user->user_image") }}" alt="profile_image" class="w-100">
                        @else
                            <img src="{{ asset('assets/img/team-2.jpg') }}" alt="profile_image" class="w-100">
                        @endif

                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h3 class="mb-0 font-weight-bold">
                            {{ $user->name }}'s Certificate Lists
                        </h3>
                        <p class="mb-0">
                            {{ $user->email }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 text-sm-end">
                    <a href="{{ url('admin/users') }}" class="btn btn-sm btn-white">Back</a>
                    <a href="javascript:;" class="btn btn-sm btn-dark">User Certificate</a>
                </div>
            </div>
        </div>
    </div>
    <table class="table">
        <thead class="bg-gray-100">
            <tr>
                <th scope="col" class="text-secondary text-xs font-weight-semibold opacity-7 border-light">#</th>
                <th scope="col" class="text-secondary text-xs font-weight-semibold opacity-7 border-light ps-2">
                    Certificate Name
                </th>
                <th scope="col" class="text-secondary text-xs font-weight-semibold opacity-7 border-light ps-2">Issue
                    Date</th>
                <th scope="col"
                    class="text-secondary text-xs font-weight-semibold opacity-7
          border-light ps-2">Expiry Date
                </th>
                <th scope="col"
                    class="text-secondary text-xs font-weight-semibold opacity-7
          border-light ps-2">Description
                </th>
                <th scope="col"
                    class="text-secondary text-xs font-weight-semibold opacity-7
          border-light ps-2">Certificate
                    Image
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user->certificates as $certificate)
                <tr>
                    <th scope="row" class="text-sm text-secondary mb-0">{{$certificate->id}}</th>
                    <td class="text-sm text-secondary mb-0">{{$certificate->certificate_name}}</td>
                    <td class="text-sm text-secondary mb-0">{{$certificate->issue_date}}</td>
                    <td class="text-sm text-secondary mb-0">{{$certificate->expiry_date}}</td>
                    <td class="text-sm text-secondary mb-0  text-wrap">{{$certificate->description}}</td>

                    <td class="text-sm text-secondary mb-0">
                        <a href="">
                            <img style="width: 100px; height: 100px; border-radius:20px;" src="{{asset("storage/user-certificate-image/$certificate->certificate_image")}}" alt="">
                        </a>
                    </td>

                </tr>
            @endforeach
            {{-- <tr>
                <th scope="row" class="text-sm text-secondary mb-0">2</th>
                <td class="text-sm text-secondary mb-0">Fira</td>
                <td class="text-sm text-secondary mb-0">Marson</td>
                <td class="text-sm text-secondary mb-0">@mar</td>
            </tr>
            <tr>
                <th scope="row" class="text-sm text-secondary mb-0">3</th>
                <td class="text-sm text-secondary mb-0">Andy</td>
                <td class="text-sm text-secondary mb-0">Frila</td>
                <td class="text-sm text-secondary mb-0">@and</td>
            </tr> --}}
        </tbody>
    </table>
@endsection
