@extends('layout.app')
<style>
.cadastraUsuarios {
  display: flex;
  justify-content: center;
  align-items: center;
  background: black;
  height: 100%;
}
.cadastraUsuarios .centraliza form {
  margin: auto;
  background: #00000094;
  padding: 25px;
  border-radius: 15px;
}
.cadastraUsuarios .centraliza form h2 {
  font-weight: 400;
  margin: 0 0 30px;
  color: #097286;
  padding: 0;
  font-size: 4em;
}
.cadastraUsuarios .centraliza form .form-floating input {
  background: #ffffffa6;
  color: black;
  font-weight: 500;
  font-size: 1.4em;
  margin: 10px 0;
}
.cadastraUsuarios .centraliza form .form-floating label {
  color: #097286;
}
.cadastraUsuarios .centraliza form  select{
  background: #ffffffa6;
  color: black;
  font-weight: 500;
  font-size: 1.4em;
  margin: 10px 0;
}
.cadastraUsuarios .centraliza form button {
  background: rgba(0, 0, 0, 0.041);
  width: 100%;
  transition: all 0.5s ease-in-out;
  border-radius: 0.2em;
  display: flex;
  justify-content: center;
  font-size: 1.2em;
  font-weight: 500;
  line-height: 1;
  padding: 9px;
  margin-top: 20px;
  text-decoration: none;
  text-align: center;
  text-transform: uppercase;
}
.cadastraUsuarios .centraliza form button:hover, .cadastraUsuarios .centraliza form button:focus {
  color: #097286;
}
.cadastraUsuarios .centraliza form .third {
  color: black;
  box-shadow: 0 0 40px 40px #097286 inset, 0 0 0 0 #097286;
  transition: all 0.3s ease-in-out;
}
.cadastraUsuarios .centraliza form .third:hover {
  box-shadow: 0 0 10px 0 black inset, 0 0 10px 4px #097286;
}
</style>
@section('content')
<section class="cadastraUsuarios">
    <div class="centraliza">
        <form method="POST" action="{{route('cadstrPedido')}}" class="form-group col-md-12">
            @csrf
            <h2 class="form-label">Venda de imóvel</h2>            
            <div class="form-group col-md-12">
                <label for="exampleSelect1" style="color: #097286; font-size: 20px;">Selecione o Imóvel</label>
                <select class="form-select" name="id_imovel" id="exampleSelect1" placeholder="Tipo" required>
                   @foreach ($imoveis as $imovel)
                        <option value="{{ $imovel->id }}">{{ $imovel->endereco }} e {{ $imovel->valor }}</option>
                   @endforeach                
                </select>
            </div>
            <div class="form-group col-md-12">
                <label for="exampleSelect2" style="color: #097286; font-size: 20px;">Selecione o cliente</label>
                <select class="form-select" name="id_cliente" id="exampleSelect2" placeholder="Tipo" required>
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                    @endforeach   
                </select>
            </div>
            <div class="col-md-12 ">
                <button class="third" type="submit">Cadastrar</button>
            </div>	
        </form>
    </div>    
</section>
