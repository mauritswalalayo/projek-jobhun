<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homepage_AdminController extends Controller
{
    public function admin()
    {
        return view('admin.master');
    }
}
