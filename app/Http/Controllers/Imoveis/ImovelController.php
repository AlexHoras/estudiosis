<?php

namespace App\Http\Controllers\Imoveis;

use App\Http\Controllers\Controller;
use App\Models\imoveis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ImovelController extends Controller
{
    public function cadstrImovel(Request $request){
        $imovel = new imoveis();         
        $imovel->tipo = $request->tipo;
        $imovel->endereco = $request->endereco;
        $imovel->numero = $request->numero;
        $imovel->bairro = $request->bairro;
        $imovel->cidade = $request->cidade;
        $imovel->valor = $request->valor;
        $imovel->created_at = now();

        $imovel->save(); 

        return redirect()->route('listImoveis');
    }
 
    public function listImoveis()
    {
        $imoveis = imoveis::all();
        return view('admin.listAllimoveis',[
            'imoveis' => $imoveis
        ]);
    }
    public function destroyImovel(imoveis $imovel){       
        $imovel->delete();
        return redirect()->route('listImoveis');
    }
}
