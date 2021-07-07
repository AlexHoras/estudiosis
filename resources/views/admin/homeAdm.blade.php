@extends('layout.app')    
<style>
.homeAdm {
  background: linear-gradient(45deg, black, #04404d);
  height: 100%;
}
.homeAdm .opcoesAdm {
  padding: 190px;
}
.homeAdm .opcoesAdm h2 {
  font-weight: 500;
  margin: 0px 0 40px;
  color: #fff;
  padding: 0;
  font-size: 2.5em;
  text-align: center;
}
.homeAdm .opcoesAdm .cadastros {
  display: flex;
  justify-content: center;
  align-items: center;
}
.homeAdm .opcoesAdm .cadastros .cadastraUsuario a {
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
.homeAdm .opcoesAdm .cadastros .cadastraUsuario a:hover {
  background: linear-gradient(44deg, #020202, #097286);
  transition: all 0.5s;
}
.homeAdm .opcoesAdm .cadastros .cadastraImoveis a {
  text-decoration: none;
  padding: 14px;
  border-radius: 31px;
  margin: 5px;
  color: white;
  background: linear-gradient(44deg, #020202, #650404);
  font-size: 1.2em;
  font-weight: 500;
  letter-spacing: 1;
  transition: all 0.5s;
}
.homeAdm .opcoesAdm .cadastros .cadastraImoveis a:hover {
  background: linear-gradient(44deg, #650404, #020202);
  transition: all 0.5s;
}
</style>

<section class="homeAdm">    
    <div class="opcoesAdm container">
        <h2>Seja bem-vindo!</h2>        
        <div class="cadastros">
            <div class="cadastraUsuario">
                <a href="{{ route('novoUser')}}">Cadastrar Usúario</a>
            </div>
            <div class="cadastraImoveis">
                <a href="{{ route('novoImovel')}}">Cadastrar Imoveis</a>
            </div>
        </div>        
    </div>  
</section>

