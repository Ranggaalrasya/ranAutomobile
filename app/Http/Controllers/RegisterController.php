<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.all',["data_user" => User::all()]);
    }

    public function create()
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

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        return redirect('/login/index')->with('success', 'Berhasil login');
    }
}
