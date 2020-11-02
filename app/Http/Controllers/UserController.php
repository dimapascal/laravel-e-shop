<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LogInUserRequest;



class UserController extends Controller
{


    public function register(CreateUserRequest $req)
    {
        $newUser = $req->all();
        $newUser['password'] = Hash::make($req['password']);

        User::create($newUser);
        return view('messages.success', ['message' => 'Registration success']);
    }

    public function login(LogInUserRequest $req)
    {
        $user = User::whereEmail($req->input('email'))->first();

        if ($user) {
            $userExist = Hash::check($req['password'], $user->getAuthPassword());

            if ($userExist) {
                Auth::login($user);
                return Redirect::route('home');
            } else {
                return Redirect::back()->withErrors(['Verify password'])->withInput($req->all());
            }
        } else {
            return Redirect::back()->withErrors(['Verify email'])->withInput($req->all());
        }
    }
    public function logout()
    {
        Auth::logout();
        return Redirect::back();
    }
}
