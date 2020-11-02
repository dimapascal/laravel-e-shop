<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(CreateUserRequest $userReq)
    {
        User::create($userReq->all());
        return view('auth.success', ['message' => 'Registration success']);
    }
}
