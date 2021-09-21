
<?php



use core\classes\Database;

//abrir a sessao

session_start();

//carregar o config
require_once('../config.php');
//carrega todas classe do projecto    
require_once('../vendor/autoload.php');
$bd = new Database;

$clientes = $bd->select("SELECT * FROM clientes");
echo "<pre>";
print_r($clientes);
/*
carregar o config
carregar classes
carregar o sistemma de rotas
    -mostar loja , carrinho ,  bo e ect*/