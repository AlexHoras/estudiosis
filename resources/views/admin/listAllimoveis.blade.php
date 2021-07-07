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
        <h2>Imóveis</h2>
        <div class="opcao">
            <a href="{{ route('novoUser')}}">Cadastrar Usúario</a>
            <a href="{{ route('novoImovel')}}">Cadastrar Imóvel</a>
        </div>       
    </div>    
    <div class="esteira">
        <table id="homeAdm" class="display">
            <thead>
            <tr>
                <th>ID</th>
                <th>TIPO</th>
                <th>ENDEREÇO</th>                
                <th>VALOR</th>       
                <th>DATA DE INSCRIÇÃO</th> 
                <th>OPÇÃO</th>      
            </tr>
            </thead>
            <tbody>
                 @foreach ($imoveis as $imovel)
                    <tr>
                        <td>{{$imovel->id}}</td>
                        <td>{{$imovel->tipo}}</td>
                        <td>{{$imovel->endereco }}, {{$imovel->numero }} | {{$imovel->bairro }} - {{$imovel->cidade }} </td>
                        <td>R${{$imovel->valor}},00</td>
                        <td>{{ date('d/m/Y H:i', strtotime($imovel->created_at)) }}</td>
                        <td>                       
                         <form style="margin: 0;" action="{{ route('imovel.destroy', ['imovel' => $imovel->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="user" value="{{ $imovel->id }}">
                                <input type="submit" value="Remover" class="remove">
                            </form> 
                        </td>           
                    </tr>
                @endforeach    
            </tbody>
        </table>
    </div>  
</section>    

  

      
