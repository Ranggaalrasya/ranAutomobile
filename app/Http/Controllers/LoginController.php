<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class LoginController extends Controller
{
    public function index(){
        return view('register.index',["data_register" => User::all()]);
    }
}
