<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();

        $company = Company::find(2);

        return view('admin.index',[
            'users' => $users,
            'company' => $company,
        ]);
    }
}
