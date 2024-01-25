<?php

namespace App\Repositories\admin;

use App\Interfaces\admin\UserInterface;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserRepository implements UserInterface
{
    public function paginate()
    {
        return User::paginate(20);
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

        $user = new User();
        $user->name = request()->name;
        $user->email = request()->email;
        $user->user_member_type_id = request()->user_member_type_id;
        $user->birthday = request()->birthday;
        $user->phone = request()->phone;
        $user->address = request()->address;
        $user->password = request()->password;
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
            $image = request()->file('image');
            $customFilename = 'user_image_' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/user-image', $customFilename);

            $oldImage = $user->user_image;
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
        $user->user_image = $this->uploadImage($id, request()->image);
        $user->update();
    }

    public function deleteUser(string $id)
    {
        $user = $this->findById($id);
        $oldImage = $user->user_image;
        Storage::delete('public/user-image/' . $oldImage);
        $user->delete();
    }
}
