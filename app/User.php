<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'fname', 'lname', 'email', 'password', 'email_verified_at', 'is_admin', 'provider', 'provider_id', 'access_token', 'avatar', 'phone', 'bank_name', 'bank_account', 'bank_id', 'fav', 'idcard', 'code_user', 'point',
    ];

    public function sendPasswordResetNotification($token)
    {
      $this->notify(new ResetPasswordNotification($token));
    }

    public function roles()
    {
      return $this->belongsToMany(Role::class);
    }

    
    /**
    * @param string|array $roles
    */
    public function authorizeRoles($roles)
    {
      if (is_array($roles)) {
          return $this->hasAnyRole($roles) ||
                 abort(401, 'This action is unauthorized.');
      }
      return $this->hasRole($roles) ||
             abort(401, 'This action is unauthorized.');
    }
    /**
    * Check multiple roles
    * @param array $roles
    */
    public function hasAnyRole($roles)
    {
      return null !== $this->roles()->whereIn('name', $roles)->first();
    }
    /**
    * Check one role
    * @param string $role
    */
    public function hasRole($role)
    {
      return null !== $this->roles()->where('name', $role)->first();
    }

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

  
}
