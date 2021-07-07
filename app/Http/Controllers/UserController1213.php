<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Whoops\Run;

class UserController extends Controller
{
    public function logintUser(){
        return view('loginPrincipal');
    }
    public function authUser(Request $request){
        $credential = [
            'name' => $request->name,
            'password' => $request->password,
        ];

        if(Auth::attempt($credential)){
            dd('LOGOU');
        }else{
            dd('NAO');
        }
    }

    public function listUser()
    {
       /*  $user = new User();
        $user->name = 'Alex Anderson';
        $user->email = 'alex@gmail.com';
        $user->password = Hash::make('754427');
        $user->save(); 

        echo ""; */
        $user = User::where('id', '=', 1)->first();
        return view('listUser', [
            'user' => $user
        ]);
    }
}
