<?php
namespace App\Services;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Skill;
use App\MOdels\Group;
use App\MOdels\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AdminUserService extends Services
{
    public function __construct()
    {

    }
    /** #01
    *  会社のグループをすべて取得
    *  @param User ログインユーザーコレクション
    *  @return
    */
    public function getGroups(User $user)
    {
        return $this->getCompany($user)->groups()->get();
    }

    /**
    *  DBからユーザー一覧を取得
    *  @param int $id ユーザーid
    *  @return ユーザーコレクション
    */
    public function getUsers()
    {
        $query = User::query()
        ->select([
            'users.id',
            'users.name',
            'users.admin_flg',
        ])
        ->from('users')
        ->whereIn(
            'id',function($subquery){
                $subquery
                ->select('group_user.user_id')
                ->from('group_user')
                ->whereIn('group_user.group_id',[1,2,3,4,5])
                ->groupBy('group_user.user_id');
            }
        )->get();

        return $query;
    }

    /**
    *  ログインユーザーを取得
    *  @param int $id ユーザーid
    *  @return ユーザーコレクション
    */
    public function getUser()
    {
        return Auth::user();
    }

    /**
    *  会社を取得
    *  @param int $id ユーザーid
    *  @return ユーザーコレクション
    */
    public function getCompany(User $user)
    {
        $company_id = $user->groups()->first()->company_id;
        return Company::find($company_id);
    }
}
