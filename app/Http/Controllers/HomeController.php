<?php

namespace App\Http\Controllers;

use App\Group;
use App\Skill;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $current_skill_id = $request->skill_id;
        if (!isset($request->skill_id)) {
            $current_skill_id = Auth::user()->groups()->get();
        }
        $current_group_id = $request->group_id;

        $user = Auth::user();
        $groups = $user->groups()->get();
        $skillsets = [];
        foreach($groups as $group){
            array_push($skillsets,$group->skills()->get());
        }

        $group_id = Group::all();
        $current_skill = $skillsets[1]->first();
        $subskills = $current_skill->subskills()->get();
        $skills = $skillsets[0];

        return view('mypage.index', [
            'user' => $user,
            'groups' => $groups,
            'skills' => $skills,
            'subskills' => $subskills,
            'current_skill' => $current_skill,
            'current_skill_id' => $current_skill_id,
        ]);
    }
}
