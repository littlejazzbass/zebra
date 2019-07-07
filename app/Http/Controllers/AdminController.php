<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use App\Models\Skill;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\AdminUserService;

class AdminController extends Controller
{
    protected $admin_user;

    public function __construct(AdminUserService $admin_user)
    {
        $this->admin_user = $admin_user;
    }

    public function index()
    {
        //ログインユーザーのIDを取得
        $user = $this->admin_user->getUser();

        //ユーザー一覧を取得
        $users = $this->admin_user->getUsers();

        //ログインユーザーの会社IDから会社を取得
        $company = $this->admin_user->getCompany($user);

        //会社のグループを全件取得する
        $groups = $this->admin_user->getGroups($user);

        return view('admin.index',[
            'users' => $users,
            'groups' => $groups,
        ]);
    }

    public function detail(User $user,Group $group,Skill $skill)
    {
        $groups = $this->admin_user->getGroups($user);
        $skills = $this->admin_user->getSkills($group);
        $subskills = $this->admin_user->getSubskills($skill);
        $current_group = $group;
        $current_skill = $skill;

        return view('admin.detail',[
            'user' => $user,
            'groups' => $groups,
            'skills' => $skills,
            'subskills' => $subskills,
            'current_group' =>   $current_group,
            'current_skill' => $current_skill,
        ]);
    }
}
