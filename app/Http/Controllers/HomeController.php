<?php

namespace App\Http\Controllers;

use App\SKill;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(Request $request)
    {
        $skills = Skill::all();
        $current_skill_id = $request->skill_id;

        return view('mypage.index',[
            'skills' => $skills,
            'current_skill_id' => $current_skill_id,
        ]);
    }
}
