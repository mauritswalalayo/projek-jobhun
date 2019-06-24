<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homepage_UserController extends Controller
{
    public function index()
    {
        return view('user.content.home_user');
    }

    public function tentang()
    {
        return view('user.content.about');
    }
}
