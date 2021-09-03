<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\food;

use App\Models\foodchef;

class HomeController extends Controller
{
    public function index()
    {
        $data=food::all();
        $data2=foodchef::all();
        return view("home",compact("data","data2"));
    }
    public function redirects()
    {
        $data=food::all();
        $data2=foodchef::all();

        $role=Auth::user()->role;

        if ($role=='1')
        {
            return view('admin/adminhere');
        }
        else
        {
            return view('home',compact("data","data2"));
        }
    }
}
