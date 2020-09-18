<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Definition of the many to many relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles() {
        return $this->belongsToMany('App\Role');
    }

    /**
     * Function to check whether the user has any role
     *
     * @param $roles to check
     * @return bool true if it contains any role, false if not
     */
    public function hasAnyRoles($roles) {
        if($this->roles()->whereIn('name', $roles)->first()) {
            return true;
        }
        return false;
    }

    /**
     * Function to check whether the user has a specific role
     *
     * @param $role to check
     * @return bool true if yes, false if not
     */
    public function hasRole($role) {
        if($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }
}
