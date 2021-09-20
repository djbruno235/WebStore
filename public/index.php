<?php



use core\classes\Database;
use core\classes\Functions;
//abrir a sessao

session_start();

//carregar o config
require_once('../config.php');
//carrega todas classe do projecto    
require_once('../vendor/autoload.php');
$bd = new Database;
$b = new Functions;
$b->teste();

echo "ok";
/*
carregar o config
carregar classes
carregar o sistemma de rotas
    -mostar loja , carrinho ,  bo e ect*/