<div class="modal fade" id="{{"membership-model-box-$user->id"}}" tabindex="-1" role="dialog"
    aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm"
        role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-dark">Member
                            Duration</h3>
                        <p class="mb-0"></p>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{url("superAdmin/user/$user->id/membership/add")}}" role="form text-left">
                            @csrf
                            <label>Remainding Membership Duration</label>
                            <div class="input-group mb-3">
                                <input type="text" value="{{$user->membership_expiry}}" name="old_member_expiry" class="form-control"
                                     aria-label="Email"
                                    aria-describedby="email-addon">
                            </div>
                            <label>Membership Duration(Months)</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control"
                                    placeholder="Enter new membership duration" name="new_member_expiry" aria-label="Email"
                                    aria-describedby="email-addon">
                            </div>
                            {{-- <label>Password</label>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control"
                                    placeholder="Password"
                                    aria-label="Password"
                                    aria-describedby="password-addon">
                            </div> --}}
                            {{-- <div class="form-check form-switch">
                                <input class="form-check-input"
                                    type="checkbox" id="rememberMe"
                                    checked="">
                                <label class="form-check-label"
                                    for="rememberMe">Remember me</label>
                            </div> --}}
                            <div class="text-center">
                                <button type="submit"
                                    class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Update
                                    </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
