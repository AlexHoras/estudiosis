<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Login
Route::get('/', 'Login\\LoginController@logintUser')->name('index-login');
Route::post('/usuario','Login\\LoginController@login')->name('usuarios');

//Usuarios
Route::get('/usuario/homeAdm', 'UsuarioController@homeAdm')->name('homeAdm');
Route::get('/usuario/novoUser', 'UsuarioController@novoUser')->name('novoUser');
Route::post('/usuarios/cadstr', 'UsuarioController@cadstrUser')->name('usuarios.cadstr');
Route::get('/usuarios/users', 'UsuarioController@listUsers')->name('listusers');
Route::delete('usuarios/destroy/{user}', 'UsuarioController@destroy')->name('user.destroy');

//Comercial
Route::get('/comercial', 'Cliente\\ClienteController@homeComercial')->name('homeComercial');
Route::get('/comercial/addcliente', 'Cliente\\ClienteController@addCliente')->name('addCliente');
Route::get('/comercial/vendaImovel', 'Cliente\\ClienteController@vendaImovel')->name('vendaImovel');
Route::get('/comercial/listVendas', 'Pedidos\\PedidosController@listVendas')->name('listVendas');
Route::post('/comercial/cadstrCliente', 'Cliente\\ClienteController@cadstrCliente')->name('cadstrCliente');
Route::post('/comercial/cadstr', 'Pedidos\\PedidosController@cadstrPedido')->name('cadstrPedido');

//Imoveis
Route::get('/usuario/novoImovel', 'UsuarioController@novoImovel')->name('novoImovel');
Route::get('/usuarios/imoveis', 'Imoveis\\ImovelController@listImoveis')->name('listImoveis');
Route::post('/usuarios/imoveis/cadstr', 'Imoveis\\ImovelController@cadstrImovel')->name('imoveis.cadstr');
Route::delete('/usuarios/destroy/{imovel}', 'Imoveis\\ImovelController@destroyImovel')->name('imovel.destroy');

// Financeiro
Route::get('/finaceiro/listVendas', 'Pedidos\\PedidosController@listVendasFinaceiro')->name('listVendasFinaceiro');
Route::get('/finaceiro/vendas/{id}', 'Pedidos\\PedidosController@enviaEdit')->name('enviaEdit');
Route::put('/finaceiro/vendas/{id}', 'Pedidos\\PedidosController@edit')->name('vendasEdit');

//CEO
Route::get('/ceo', 'UsuarioController@ceo')->name('homeceo');

/* 
Route::get('/admin','AuthController@dashboard')->name('dashboard');


Route::get('/admin/imoveis', function () {
    return view('listAllimoveis');
});
Route::get('/admin/imoveis/novo', function () {
    return view('addImovel');
});
Route::get('/comercial', function () {
    return view('homeComercial');
});
Route::get('/comercial/clientes/novo', function () {
    return view('addClientes');
});
Route::get('/comercial/vendaImovel', function () {
    return view('vendaImovel');
});
Route::get('/financeiro', function () {
    return view('homeFinanceiro');
});
 */



/* Route::group(['namespace' => 'Form'], function(){

    //GET
    Route::get('lista-usuario', 'UserController@listUser');
    Route::get('usuarios', 'TestController@listUsers')->name('users.listAll');   
    Route::get('usuarios/editar/{user}', 'TestController@formEditUser')->name('user.formEditUser');
    Route::get('usuarios/{user}', 'TestController@listUser')->name('user.listUser');
    
    //Imóvel
    
    

    //Post
    Route::post('usuarios/cadstr', 'TestController@cadstrUser')->name('user.cadstr');
    

    //EDIT VERBO PUT/PATH
    Route::put('usuarios/edit/{user}', 'TestController@edit')->name('user.edit');

    //Delete
    Route::delete('usuarios/destroy/{user}', 'TestController@destroy')->name('user.destroy');

});

 */