<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail {

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
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
//        'saved' => UserSaved::class,
//        'deleted' => UserDeleted::class,
    ];
    
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
//        'seen_at', // DateTime / Carbon instance
    ];

    /**
     * User Roles relation
     * 
     * @return App\Role
     */
    public function roles() {
        return $this->belongsToMany('App\Role', 'users_roles');
    }

    public function isDeveloper() {

        return $this->hasRoles('developer');
    }

    public function hasRoles($roles) {

        if (is_array($roles)) {
            foreach ($this->roles as $role) {
                foreach ($roles as $itr) {
                    if (strtolower($itr) == $role->slug) {
                        return true;
                    }
                }
            }
        } else {
            foreach ($this->roles as $role) {
                if (strtolower($roles) == $role->slug) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
//        static::created(function ($user) {
//            //
//        });
    }
    
}
