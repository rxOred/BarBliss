<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->user_type == "client") {
                return view('dashboard');
            } else if (Auth::user()->user_type == 'org_admin') {
                return view('org.home');
            } else if (Auth::user()->user_type == 'admin') {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        return view('dashboard');
    }
}