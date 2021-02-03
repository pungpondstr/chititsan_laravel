<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\UserModel;

class UserController extends Controller
{
    public function login (REQUEST $request) {
        $email = $request -> get('email');
        $password = $request -> get('password');
        $users = User::all()->where('email', '=', $email)->where('password', '=', $password);
        if (count($users) > 0) {
            return response()->json("welcome");
        } else {
            return response()->json('email or password wrong');
        }
    }

    public function register (REQUEST $request) {
        $users = new UserModel($request -> all());
        $users -> save();
        return response()->json("success");
    }
}
