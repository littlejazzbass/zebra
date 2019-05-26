<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $current_skill_id = $request->skill_id;
        if (!isset($request->skill_id)) {
            $current_skill_id = Group::first()->id;
        }
        
        $group_id = Group::all();
        $skills = Group::where('group_id',$id);
        $current_skill = $skills->where('id',$current_skill_id)->first();
        $subskills = $current_skill->subskills()->get();

        return view('mypage.index', [
            'skills' => $skills,
            'subskills' => $subskills,
            'current_skill' => $current_skill,
            'current_skill_id' => $current_skill_id,
        ]);
    }
}
