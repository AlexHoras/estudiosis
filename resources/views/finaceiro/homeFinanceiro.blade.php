@extends('layout.app')
<style>
    .usuarios .texto {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 4px 60px;
      background: linear-gradient(45deg, black, #036173);
    }
    .usuarios .texto h2 {
      font-weight: 400;
      margin: 0 0 30px;
      color: #fff;
      padding: 0px;
      font-size: 4em;
    }
    .usuarios .texto .opcao a {
      text-decoration: none;
      padding: 14px;
      border-radius: 31px;
      margin: 5px;
      color: white;
      background: linear-gradient(44deg, #097286, #020202);
      font-size: 1.2em;
      font-weight: 500;
      letter-spacing: 1;
      transition: all 0.5s;
    }
    .usuarios .texto .opcao a:hover {
      background: linear-gradient(44deg, #020202, #097286);
      transition: all 0.5s;
    }
    
    .esteira {
      width: 90%;
      margin: 25px auto 80px;
    }
    .esteira .selecao {
      height: 32px;
      color: #074377;
      border-color: #6495ed66;
      padding-left: 11px;
      font-size: 14px;
      font-weight: 300;
    }
    .esteira .selecao:focus {
      outline: -webkit-focus-ring-color auto 0;
    }
    .esteira .remove {
      background: black;
      color: #fff;
      font-size: 18px;
      padding: 4px 30px;
      font-weight: 400;
      border-radius: 10px;
      background: linear-gradient(44deg, #020202, #650404);
      letter-spacing: 1;
      transition: all 0.5s;
    }
    .esteira .remove:hover {
      background: linear-gradient(44deg, #650404, #020202);
      transition: all 0.5s;
    }
    .esteira .label {
      font-size: 18px;
      font-weight: 500;
      color: black;
      margin-bottom: 10px;
    }
    .esteira .filtro {
      margin-bottom: 15px;
      float: right;
    }
    .esteira .filtrando {
      color: #064169;
      border: 1px solid #064169;
      transition: all 0.3s;
    }
    .esteira .filtrando:hover {
      color: #fff;
      background: #064169;
      transition: all 0.3s;
    }
    @media screen and (max-width: 1060px) {
      .esteira .dataTables_wrapper {
        overflow: scroll;
      }
    }
    @media screen and (max-width: 640px) {
      .esteira .dataTables_length {
        float: left;
      }
    }
    @media screen and (max-width: 640px) {
      .esteira .dataTables_filter {
        float: right;
        margin-top: 0;
      }
    }
    .esteira table thead {
      background: linear-gradient(44deg, #020202, #097286);
      color: white;
      letter-spacing: 2px;
    }
    .esteira table tbody tr td {
      font-size: 1em;
      font-weight: 500;
      color: black;
    }
    .esteira table tbody tr td:nth-child(1) {
      color: black;
      font-weight: bold;
    }
</style>
<section class="usuarios">
    <div class="texto">
        <h2>Venda de imóveis</h2>      
    </div>    
    <div class="esteira">
        <table id="homeAdm" class="display">
            <thead>
            <tr>
                <th>ID</th>
                <th>ID_IMOVEL</th>
                <th>ID_CLIENTE</th>                
                <th>STATUS</th>       
                <th>VALOR</th>      
                <th>DATA DA PROPOSTA</th> 
                <th>OPCÃO</th> 
            </tr>
            </thead>
            <tbody>
            @foreach ($vendas as $venda)
                    <tr>
                        <td>{{$venda->id}}</td>
                        <td>{{$venda->id_imovel}}</td>
                        <td>{{$venda->id_cliente}}</td>
                        <td>{{$venda->staus}}</td>
                        <td>{{$venda->valor_imovel}}</td>
                        <td>{{ date('d/m/Y H:i', strtotime($venda->data_proposta)) }}</td>
                        <td>                       
                          <a href="{{ route('enviaEdit',['id' => $venda->id]) }}" class="remove">Editar</a>
                        </td>           
                    </tr>
                @endforeach    
            </tbody>
        </table>
    </div>  
</section>    

  

      
