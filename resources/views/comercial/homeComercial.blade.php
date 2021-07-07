@extends('layout.app')

<section class="homeAdm">    
    <div class="opcoesAdm container">
        <h2>Seja bem-vindo!</h2>
        <div class="cadastros">
            <div class="cadastraUsuario">
                <a href="{{ route('addCliente') }}">Cadastrar Clientes</a>
            </div>
            <div class="cadastraImoveis">
                <a href="{{ route('vendaImovel') }}">Venda dos imoveis</a>
            </div>
        </div>        
    </div>  
</section>

