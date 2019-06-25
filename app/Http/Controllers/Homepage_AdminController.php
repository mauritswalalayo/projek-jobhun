<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homepage_AdminController extends Controller
{
    public function index()
    {
        return view('admin.content.index');
    }


    // ======================== Bagian Admin di User ======================== //
    public function usertable()
    {
        return view('admin.content.user.table');
    }

    public function userform()
    {
        return view('admin.content.user.form');
    }


    // ======================== Bagian Admin di Post ======================== //
    public function posttable()
    {
        return view('admin.content.post.table');
    }

    public function postform()
    {
        return view('admin.content.post.form');
    }


    // ======================== Bagian Admin di Tag ======================== //
    public function tagtable()
    {
        return view('admin.content.tag.table');
    }

    public function tagform()
    {
        return view('admin.content.tag.form');
    }
}
