<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        return view('admin.user.index');
    }
    public function show(){
        return view('admin.user.show');
    }
    public function create(){
        return view('admin.user.create');
    }
}
