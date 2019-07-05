<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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

    protected $table = 'users';

    const ADMIN_STATUS = [
        0 => '一般',
        1 => '管理者',
    ];

    public function getUserStatusAttribute()
    {
        //ユーザー権限
        $status = $this->attribute['admin_flg'];

        if(!isset(self::ADMIN_STATUS[$status])){
            return '';
        }

        return self::ADMIN_STATUS[$status];
    }

    public function groups()
    {
        return $this->belongsToMany('App\Models\Group','group_user');
    }
}
