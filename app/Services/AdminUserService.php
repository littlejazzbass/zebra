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
    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    /** #01
    *  会社のグループをすべて取得
    *  @param User ログインユーザーコレクション
    *  @return
    */
    public function getCompanyGroups(User $user)
    {
        return $this->getCompany($user)->groups()->get();
    }

    /**
    *  ユーザーのグループを取得
    *  @param User ログインユーザーコレクション
    *  @return
    */
    public function getUserGroups(User $user)
    {
        return $user->groups()->get();
    }

    /**
    *  DBからユーザー一覧を取得
    *  @param int $id ユーザーid
    *  @return ユーザーコレクション
    */
    public function getCompanyUsers(User $user)
    {
        $groupIdArray = [];
        $groups = $this->getCompany($user)->groups()->get();
        foreach ($groups as $group) {
            array_push($groupIdArray, $group->id);
        }
        return $this->userModel->getCompanyUsers($groupIdArray);
    }

    /**
    *  ログインユーザーを取得
    *  @param int $id ユーザーid
    *  @return ユーザーコレクション
    */
    public function getLoginUser()
    {
        return Auth::user();
    }

    /**
    *  グループに紐づくスキルを取得
    *  @param int $id ユーザーid
    *  @return スキルコレクション
    */
    public function getSkills(Group $group)
    {
        return $group->skills()->get();
    }

    /**
     * Undocumented function
     *
     * @param User $user
     * @return void
     */
    public function getPerformances(User $user)
    {
        return $user->performances()->get();
    }

    /**
    *  スキルに紐づくサブスキルを取得
    *  @param int $id ユーザーid
    *  @return サブスキルコレクション
    */
    public function getSubskills(Skill $skill)
    {
        return $skill->subskills()->get();
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
