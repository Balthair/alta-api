<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id',
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
     * Get the role assigned to user.
     */
    public function role() {
        return $this->belongsTo('App\Role');
    }

    /**
     * @return array;
     */
    public function getAll() {
        return $this->get();
    }

    public function getById($id) {
        return $this->where('id', $id)->first();
    }

    public function add($data) {
        $this->create($data);
    }

    public function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value);
    }

    public function drop($id) {
        $this->findOrFail($id)->delete();
    }
}
