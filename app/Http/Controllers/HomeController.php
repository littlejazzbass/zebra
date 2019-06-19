<?php

namespace App\Http\Controllers;

use App\Group;
use App\Skill;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
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
        $subskills = $current_skill->subskills()->get();

        //現在のグループを取得する
        $current_group = $group;

        //現在のスキルに紐づくサブスキルを取得する
        $subskills = $current_skill->subskills()->get();

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
