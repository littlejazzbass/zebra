<?php
namespace App\Services;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Skill;


class UserService extends Services
{
    public function __construct()
    {

    }
    /** #01
    *  DBからユーザー情報を取得
    *  @var int $id ユーザーid
    */
    public function getUser(int $id)
    {
        $user = User::query()
        ->select([
            'users.id as user_id',
            'users.name as user_name',
            'users.email',
            'users.admin_flg as user_status',
        ])
        ->where('users.id',$id)
        ->first();

        return $user;
    }

    public function getSubskills(Skill $current_skill)
    {
        return $current_skill->subskills()->get();
    }
}
