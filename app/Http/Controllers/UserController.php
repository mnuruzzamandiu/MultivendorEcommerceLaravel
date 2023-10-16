<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    //
    public function userDashboard()
    {
        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('frontend.pages.user.dashboard')->with(compact('userData'));
    }
}
