<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;

class homeControl extends Controller
{
    function index()
    {
        $data = food::all();

        return view("home", ["data" => $data]);
    }
    function redirect()
    {
        $data = food::all();
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view("admin.admin");
        } else {
            return view("home", ["data" => $data]);
        }
    }
}
