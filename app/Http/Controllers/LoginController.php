<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view("login");
    }

    

    public  function login(Request $request)
    {
        if (!Auth::attempt([
            'name' => $request->input('name'),
            'password' => $request->input('password')
        ])) {
            return response([
                'message'=>'Invalid'
            ]);
        }
        $user=Auth::user();
        return $user;
    }
}
