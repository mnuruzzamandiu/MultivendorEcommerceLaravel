<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function sellerDashboard(){
        return view('backend.seller.seller_dashboard');
    }
}
