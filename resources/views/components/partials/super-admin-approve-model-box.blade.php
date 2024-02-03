<div class="modal fade" id="{{"super-admin-approve-model-$user->id"}}" tabindex="-1" role="dialog"
aria-labelledby="modal-default" aria-hidden="true">
<div class="modal-dialog modal- modal-dialog-centered modal-"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h6 class="modal-title" id="modal-title-default">Admin
                Approvement</h6>
            <button type="button" class="btn-close text-dark"
                data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <form action="{{ url("superAdmin/user/$user->id/approve") }}"
            method="get">
            <div class="modal-body">

                <p>Are You Sure Want To Approve This User?</p>


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-dark">Save
                    changes</button>
                <button type="button"
                    class="btn btn-link text-dark ml-auto"
                    data-bs-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>
</div>
