<?php

namespace App\Http\Controllers;

use App\User;
use App\Group;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $group_id = Auth::user()->group_id;
        $company_id = Group::where('id',$group_id)->company_id;
        $company = Company::where('id',$company_id);
        $groups = Group::where('company_id',$company_id);

        $users = User::where('group_id',$user_group);

        return view('admin.index',[
            'user_group' => $user_group,
            'users' => $users,
            'company' => $company,
        ]);
    }
}
