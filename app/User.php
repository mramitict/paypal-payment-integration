<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Silber\Bouncer\Database\HasRolesAndAbilities;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRolesAndAbilities, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'first_name', 'middle_name', 'last_name', 'username', 'password', 'email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function scopeExcept($query, $id)
    {
        return $query->where('id','!=',$id);
    }

    public function getNameAttribute()
    {
        return implode(' ', array_filter([
            $this->first_name, $this->middle_name, $this->last_name
        ], function($item){
            return ! empty($item);
        }));
    }
}
