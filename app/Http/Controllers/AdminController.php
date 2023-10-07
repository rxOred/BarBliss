<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function add_merchant_view()
    {
        return view('admin.add_merchants');
    }

    public function create_merchant(Request $request)
    {
        $merchant = new Merchant;
        $merchant->name = $request->name;
        $merchant->business_id = $request->business_id;
        $merchant->license_id = $request->license_id;
        $merchant->org_code = $request->org_code;
        $merchant->save();
        return redirect()->back();
    }

    public function add_org_admin_view()
    {
        return view('admin.add_org_admin');
    }

    public function create_org_admin(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nic = $request->nic;
        $user->org_code = $request->org_code;
        $user->user_type = "org_admin";
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back();
    }
}