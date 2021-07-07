<?php

namespace App\Http\Controllers\Pedidos;

use App\Http\Controllers\Controller;
use App\Models\cliente;
use App\Models\imoveis;
use App\Models\pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function cadstrPedido(Request $request){
        $id_imovel = $request->id_imovel;
        $valor = imoveis::where('id', '=', $id_imovel)->first();        

        $vendas = new pedido();         
        $vendas->id_imovel = $id_imovel;
        $vendas->id_cliente = $request->id_cliente;
        $vendas->staus = 'Aguardando aprovação';
        $vendas->valor_imovel = $valor->valor;        
        $vendas->data_proposta = now();
        $vendas->save(); 

        return redirect()->route('listVendas'); 
    }
    public function listVendas(){
        $vendas = pedido::all();

     /*  $id_imovel = imoveis::where('id', '=', $vendas->id_imovel)->first();  
        $id_cliente = cliente::where('id', '=', $vendas->id_cliente)->first();   */

        return view('comercial.listAllPedidos',[
            'vendas' => $vendas,
          /* 'cliente' => $id_cliente,
            'imovel' => $id_imovel */
        ]);
    }
    public function enviaEdit($id){       
        $pedido = pedido::where('id','=',$id)->first();         
        return view('finaceiro.vendaEditar',[
            'venda' => $pedido
        ]);   
    }  
    public function edit(Request $request, $id){

       $pedido = pedido::findOrFail($id);
     
        $pedido->staus = $request->staus;
        $pedido->data_venda  = now();
      
       $pedido->save();
        return redirect()->route('listVendasFinaceiro');    
    }
    public function listVendasFinaceiro(){
        $vendas = pedido::all();      
        return view('finaceiro.homeFinanceiro',[
            'vendas' => $vendas,           
        ]);
    }
}
