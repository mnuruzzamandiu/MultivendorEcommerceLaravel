<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class SellerController extends Controller
{
    public function sellerDashboard(){
        return view('backend.seller.pages.seller_dashboard');
    }
    public function sellerLogin()
    {
        return view('backend.seller.pages.seller_login');
    }
    public function sellerDestroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/seller/login');
    }

    public function sellerProfile()
    {
        $id = Auth::user()->id;
        $sellerData = User::find($id);
        return view('backend.seller.pages.profile', compact('sellerData'));
    }
    public function sellerProfileUpdate(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->seller_join = $request->seller_join;
        $data->seller_short_info = $request->seller_short_info;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            @unlink(public_path('uploads/seller/' . $data->photo));
            $imageName = 'Profile_' . rand(10000, 300) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/seller'), $imageName);
            $data->photo = $imageName;
        }
        $data->save();
        flash()->addSuccess('Seller Profile Update Successfully');
        return redirect()->back();
    }

    public function sellerChangePassword()
    {
        return view('backend.seller.pages.change_password');
    }
    public function sellerUpdatePassword(Request $request)
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
