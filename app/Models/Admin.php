<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;


    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'admin_role');
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        } else {
            return false;
        }
    }
    public function isSuperAdmin()
    {
        // dd(in_array('SuperAdmin', $this->roles()->pluck('name')->toArray()));
        return in_array('Super Admin', $this->roles()->pluck('name')->toArray());
    }
}
