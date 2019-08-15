<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use App\Services\AdminUserService;

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

    public function getNumber($int)
    {
        return self::ADMIN_STATUS[$int];
    }

    public function groups()
    {
        return $this->belongsToMany('App\Models\Group','group_user');
    }

    public function performances()
    {
        return $this->hasMany('App\Models\Performance');
    }

    public function performanceHistorys()
    {
        return $this->hasMany('app\Models\PerformanceHistory');
    }

    public function getCompanyUsers($groupIdArray)
    {
        $query = User::query()
        ->select([
            'users.id',
            'users.name',
            'users.admin_flg',
        ])
        ->from('users')
        ->whereIn(
            'id',function($subquery) use(&$groupIdArray){
                $subquery
                ->select('group_user.user_id')
                ->from('group_user')
                ->whereIn('group_user.group_id',$groupIdArray)
                ->groupBy('group_user.user_id');
            }
        )->get();
        return $query;
    }


}
