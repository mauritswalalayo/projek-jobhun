<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homepage_AdminController extends Controller
{
    public function index()
    {
        return view('admin.content.index');
    }



    public function admintable()
    {
        return view('admin.content.user.table');
    }
}
