<?php

namespace App\Repositories\admin;

use App\Interfaces\admin\UserInterface;
use App\Models\User;
use App\Models\UserCertificate;
use Illuminate\Support\Facades\Storage;

class UserRepository implements UserInterface
{
    public function paginate()
    {
        $userQuery=User::query();
        $status=request()->user_status;
        // dd($status);
        if($status){
            $userQuery->where('user_status',$status);
        }
        $users=$userQuery->paginate(20);
        return $users;
    }

    public function storeValidation()
    {

        request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'phone' => 'required',
            'user_member_type_id' => 'required',

        ]);
    }

    private function storeImage()
    {
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $customFilename = 'user_image_' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/user-image', $customFilename);
            return $customFilename;
        } else {
            return NULL;
        }
    }

    public function store()
    {
        $membershipDuration = now()->addMonths(3)->format('Y-m-d'); // 3 months membership duration as default
        // dd($membershipDuration);
        $user = new User();
        $user->name = request()->name;
        $user->email = request()->email;
        $user->user_member_type_id = request()->user_member_type_id;
        $user->birthday = request()->birthday;
        $user->phone = request()->phone;
        $user->address = request()->address;
        $user->password = request()->password;
        $user->membership_expiry=$membershipDuration;
        if (auth()->guard('admin')->user()->isSuperAdmin()) {
            $user->user_status = config('constant.user.status.superAdminApproved');
        } else if (auth()->guard('admin')->user()->isAdmin()) {
            // dd('hi');
            $user->user_status = config('constant.user.status.adminApproved');
        } else {
            $user->user_status = config('constant.user.status.pending');
        }


        $user->user_image = $this->storeImage(request()->image);
        $user->save();
    }

    public function findById(string $id)
    {
        return User::findOrFail($id);
    }

    public function updateValidation(string $id)
    {
        request()->validate([
            'name' => 'required',
            'email' => "required|unique:users,email,$id",
            'phone' => 'required',
            'user_member_type_id' => 'required',

        ]);
    }

    private function uploadImage($id)
    {
        $user = $this->findById($id);
        if (request()->hasFile('image')) {
            $oldImage = $user->user_image;
            // dd($oldImage);
            $image = request()->file('image');
            $customFilename = 'user_image_' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/user-image', $customFilename);

            Storage::delete('public/user-image/' . $oldImage);
            return $customFilename;
        } else {
            return NULL;
        }
    }

    public function update(string $id)
    {
        $user = $this->findById($id);
        $user->name = request()->name;
        $user->email = request()->email;
        $user->user_member_type_id = request()->user_member_type_id;
        $user->birthday = request()->birthday;
        $user->phone = request()->phone;
        $user->address = request()->address;
        if (request()->password != null) {
            $user->password = request()->password;
        } else {
            $user->password = $user->password;
        }
        // dd('hi');
        if (request()->hasFile('image')) {
            // dd('hello');
            $user->user_image = $this->uploadImage($id, request()->image);
        }
        $user->update();
    }

    public function deleteUser(string $id)
    {
        $user = User::with('certificates')->find($id);
        if ($user->certificates->isNotEmpty()) {
            foreach ($user->certificates as $certificate) {
                // Check if the certificate image exists before deleting
                if ($certificate->certificate_image) {
                    $oldCertificateImage = $certificate->certificate_image;
                    Storage::delete('public/user-certificate-image/' . $oldCertificateImage);
                }
            }
            // Delete the user's certificates
            $user->certificates()->delete();
        }
        $oldImage = $user->user_image;
        Storage::delete('public/user-image/' . $oldImage);
        $user->delete();
    }

    private function storeCertificateImage()
    {
        if (request()->hasFile('certificate_image')) {
            $image = request()->file('certificate_image');
            $customFilename = 'user_certificate_image_' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/user-certificate-image', $customFilename);
            return $customFilename;
        } else {
            return NULL;
        }
    }

    public function storeUserCertificate(string $id)
    {
        // $user=$this->findById($id);
        // dd(request()->all());
        $userCertificate = new UserCertificate();
        $userCertificate->user_id = $id;
        $userCertificate->certificate_name = request()->certificate_name;
        $userCertificate->issue_date = request()->issue_date;
        $userCertificate->expiry_date = request()->expiry_date;
        $userCertificate->description = request()->description;
        $userCertificate->certificate_image = $this->storeCertificateImage(request()->certificate_image);
        $userCertificate->save();
    }
}
