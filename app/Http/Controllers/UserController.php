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
    public function userProfileUpdate(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->userName = $request->userName;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            @unlink(public_path('uploads/user_image/' . $data->photo));
            $imageName = 'Profile_' . rand(10000, 300) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/user_image'), $imageName);
            $data->photo = $imageName;
        }
        $data->save();
        flash()->addSuccess('User Profile Update Successfully');
        return redirect()->back();
    }
}
