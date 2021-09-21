<?php

//coleçao da rotas

$rotas = [
    'inicio' => 'main@index',
    'loja'   => 'main@loja'  ,
    'carrinho' => 'loja@carrinho',
    'prod'     =>'loja@prod'

];

//Define acao por defeito
$acao = 'inicio';

//Verifica se ha acao na query string
if (isset($_GET['a'])) {
    
    //verifica se tem a açao na rotas
    if (!key_exists($_GET['a'],$rotas)) {
        $acao = 'inicio';
    }else{
        $acao = $_GET['a'];
    }
}    

 //trata a definição da rotas
 $partes = explode('@',$rotas[$acao]);
$controlador = 'core\\controladores\\'.ucfirst($partes[0]);
$metodo = $partes[1];

//chamar o meu controlador

$ctr = new $controlador();
$ctr-> $metodo();

  
    