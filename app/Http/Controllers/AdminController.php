<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        return view('backend.admin.pages.admin_dashboard');
    }

    public function adminLogin()
    {
        return view('backend.admin.pages.admin_login');
    }

    public function formInput()
    {
        return view('backend.form-input');
    }

    public function formLayout()
    {
        return view('backend.form-layout');
    }
    public function dataTable()
    {
        return view('backend.data-table');
    } public function salesDashboard()
    {
        return view('backend.salesDashboard');
    }

    public function adminDestroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
