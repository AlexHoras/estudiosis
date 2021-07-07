<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function logintUser(){
        return view('index');
    }
    public function login(Request $request){
        
        $user = $request->user;
        $password = $request->password;

        $usuario = usuario::where('user', '=', $user)->where('senha', '=', $password)->first();
        
        if(@$usuario->id != null){
           @session_start();          
            $_SESSION['id_usuario'] = $usuario->id;
            $_SESSION['nome_usuario'] = $usuario->nome;
            $_SESSION['nivel_usuario'] = $usuario->nivel;
            
            if($_SESSION['nivel_usuario'] == 'Administrador'){     
                return redirect()->route('homeAdm');                
            }
            if($_SESSION['nivel_usuario'] == 'Comercial'){  
                return redirect()->route('homeComercial');                
            }
            if($_SESSION['nivel_usuario'] == 'Financeiro'){   
                return redirect()->route('listVendasFinaceiro');                
            }
            if($_SESSION['nivel_usuario'] == 'ceo'){   
                return redirect()->route('homeceo');                
            }
        }else{
            return redirect()->route('index-login');            
        }
        
    }    
    public function logout(){
        @session_start();
        @session_destroy();
        return view('loginPrincipal');
    }   
}
