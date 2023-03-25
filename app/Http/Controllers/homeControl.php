<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeControl extends Controller
{
    function index()
    {
        return view("home");
    }
    function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view("admin.admin");
        } else {
            return view("home");
        }
    }
}
