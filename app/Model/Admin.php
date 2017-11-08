<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'nickname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


//    public function findForPassport($username) {
//        return $this->where('username', $username)->first();
//    }
//
//    /**
//     * passport 验证密码
//     * @param $password
//     * @return bool
//     */
//    public function validateForPassportPasswordGrant($password)
//    {
//        return $this->password == $password;
//    }
}
