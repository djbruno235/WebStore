<?php

/*
carregar o config
carregar classes
carregar o sistemma de rotas
    -mostar loja , carrinho ,  bo e ect*/

//abrir a sessao
session_start();

//carregar o config
require_once('../config.php');
//carrega todas classe do projecto    
require_once('../vendor/autoload.php');

// Carregar sistemas rota
require_once('../core/rotas.php'); 