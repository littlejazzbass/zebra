<?php
namespace App\Services;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Skill;
use App\MOdels\Group;
use Illuminate\Support\Facades\Auth;


class UserService extends Services
{
    public function __construct()
    {

    }
    /** #01
    *  DBからユーザー情報を取得
    *  @param int $id ユーザーid
    *  @return ユーザーコレクション
    */
    public function getUser()
    {
        $user = Auth::user();
        return $user;
    }

    /** #02
    *  スキルに応じたサブスキルを取得
    *  @param Skill スキルインスタンス
    *  @return コレクション
    */
    public function getSubskills(Skill $current_skill)
    {
        return $current_skill->subskills()->get();
    }

    /** #03
    *  現在のスキルセットを取得
    *  @param Group $group, $groups
    *  @return スキルズコレクション
    */
    public function getCurrentSkills(Group $group, $groups)
    {
        if(is_null($group->id)){
            return redirect()->route('home',[
                'group' => $groups->first()->id,
                'skill' => $groups->first()->skills()->first()->id,
            ]);
        }else{
            $skills = $group->skills()->get();
            return $skills;
        }
    }

    /** #04
    *  ユーザーの所属するグループを取得する
    *  @param
    *  @return
    */
    public function getGroups(User $user)
    {
        return $user->groups()->get();
    }

}
