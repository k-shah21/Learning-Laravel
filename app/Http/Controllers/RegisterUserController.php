<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view("auth.register");
    }
    public function store()
    {
        $data = request()->validate([
            "first_name" => "required|min:3|max:256",
            "last_name" => "required|min:3|max:256",
            "email" => "required|email|unique:users,email|max:256",
            "password" => "required|confirmed|min:6",
        ]);
        User::create($data);

        return redirect("/jobs")->with("success", "User has been registered");
    }
}
