<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.all');
    }

    public function create(User $user)
    {
        return view('register.create', [
            "user" => User::all()
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'required'
        ]);

        User::create($validateData);
    }
}
