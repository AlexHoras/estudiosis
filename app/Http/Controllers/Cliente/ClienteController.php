<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\cliente;
use App\Models\imoveis;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function homeComercial(){
        return view('comercial.homeComercial');
    }
    public function addCliente(){
        return view('comercial.addClientes');
    }
    public function vendaImovel(cliente $cliente, imoveis $imoveis){
        $clientes = cliente::all();
        $imoveis = imoveis::all();
        return view('comercial.vendaImoveis',[
            'clientes' => $clientes,
            'imoveis' => $imoveis
        ]);
    }
    public function cadstrCliente(Request $request){              

        $cliente = new cliente();         
        $cliente->nome = $request->name;
        $cliente->email = $request->email;       
        $cliente->save(); 

        return redirect()->route('listVendas'); 
    }
}
