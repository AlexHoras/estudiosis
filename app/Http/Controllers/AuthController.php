<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard(){
        if(Auth::check() === true){
            return view('homeAdm');
        }else{
            return redirect()->route('page.login');
        }    
    }
    public function login(Request $request){
        
        $email = $request->email;
        $password = $request->password;

        $usuario = User::where('email', '=', $email)->where('password', '=', $password);
        
        if(isset($usuario)){
            dd($usuario);

           /*  if($_SESSION['tipo'] == 'admin'){
                return view('homeAdm');
            } */
        }else{
            echo "<script language='javascript'> windows.alert('Dados incorretos!) </script>";
            return view('loginPrincipal');
        }

        /* $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];
        Auth::attempt($credential);
        dd(Auth::user()); */
        
    }    
    public function logout(){
        @session_start();
        @session_destroy();
        return view('loginPrincipal');
    }
   
}
