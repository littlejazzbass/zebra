<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Services\UserService;

class HomeController extends Controller
{
    protected $user_service;

    public function __construct(UserService $user_service)
    {
        $this->user_service = $user_service;
    }

    /**
    * GET /mypage/skill/{group}/{skill}
    */
    public function index(Group $group , Skill $skill)
    {
        //ログインユーザーを取得する
        $user = Auth::user();

        //ログインユーザーに紐づくグループを取得する
        $groups = $user->groups()->get();

        //現在のスキルセットを取得する
        if(is_null($group->id)){
            return redirect()->route('home',[
                'group' => $groups->first()->id,
                'skill' => $groups->first()->skills()->first()->id,
            ]);
        }else{
            $skills = $group->skills()->get();
        }

        //現在のスキルを取得する
        $current_skill = $skill;
        
        //サブスキルを取得する
        $subskills = $this->user_service->getSubskills($current_skill);

        //現在のグループを取得する
        $current_group = $group;

        return view('mypage.index', [
            'user' => $user,
            'groups' => $groups,
            'skills' => $skills,
            'subskills' => $subskills,
            'current_skill' => $current_skill,
            'current_group' => $group,
        ]);
    }
}
