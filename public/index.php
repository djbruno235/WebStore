<?php

/*
carregar o config
carregar classes
carregar o sistemma de rotas
    -mostar loja , carrinho ,  bo e ect*/

//abrir a sessao
session_start();

//carrega todas classe do projecto e o config   
require_once('../vendor/autoload.php');
// Carregar sistemas rota
require_once('../core/rotas.php'); 
