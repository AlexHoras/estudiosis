<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\imoveis;
use App\Models\pedido;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{     
    public function homeAdm(){
        return view('admin.homeAdm');
    }
    public function novoUser(){
        return view('admin.addUser');
    }
    public function novoImovel(){
        return view('admin.addImovel');
    }
    public function listUsers(){
        $users = usuario::all();
        return view('admin.listAllUsers',[
            'users' => $users
        ]);
    }
    public function ceo(){
        $clientes = cliente::count();
        $imoveis = imoveis::count();        
        $compras = pedido::where('staus', '=', 'Vendido')->count();
        $valor = pedido::all()->where('staus', '=', 'Vendido');
        $contas = 0;
        foreach($valor as $valores){       
            $contas += $valores->valor_imovel;              
        };
        $faturamento = $contas;
       
        return view('ceo.index',[
            'clientes' => $clientes,
            'imoveis' => $imoveis,
            'vendas' => $compras,
            'faturamento' => $faturamento
        ]);       
        
    }

    public function cadstrUser(Request $request){
        $user = new usuario();         
        $user->nome = $request->nome;
        $user->user = $request->user;
        $user->senha = $request->senha;
        $user->email = $request->email;
        $user->nivel = $request->nivel;       
        $user->save(); 

        return redirect()->route('listusers');
    }

    public function destroy(usuario $user){       
        $user->delete();
        return redirect()->route('listusers');
    }
}
