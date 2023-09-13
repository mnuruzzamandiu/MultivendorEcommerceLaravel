<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function adminProfile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('backend.admin.pages.profile', compact('adminData'));
    }

    public function formLayout()
    {
        return view('backend.form-layout');
    }
    public function dataTable()
    {
        return view('backend.data-table');
    }
    public function salesDashboard()
    {
        return view('backend.salesDashboard');
    }
    public function companyProfile()
    {
        return view('backend.companyProfile');
    }

    public function adminDestroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function adminProfileUpdate(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            @unlink(public_path('uploads/admin/' . $data->photo));
            $imageName = 'Profile_' . rand(10000, 300) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admin'), $imageName);
            $data->photo = $imageName;
        }
        $data->save();
        flash()->addSuccess('Admin Profile Update Successfully');
        return redirect()->back();
    }

    public function adminChangePassword()
    {
        return view('backend.admin.pages.change_password');
    }

    public function adminUpdatePassword(Request $request)
    {
        //validation
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        //match the old password
        if (!Hash::check($request->current_password, auth()->user()->password)) {
            flash()->addWarning('Current Password Does Not Match !!');
            return redirect()->back();
        }

        //update new password
        User::where('id', Auth::user()->id)->update([
            'password' => Hash::make($request->new_password),
        ]);
        flash()->addSuccess(' Password Changes Successfully !!');
        return redirect()->back();
    }
}
