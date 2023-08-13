<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function adminDashboard(){
        return view('backend.admin.pages.admin_dashboard');
    }

    public function adminLogin(){
        return view('backend.admin.pages.admin_login');
    }

    public function adminDestroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
