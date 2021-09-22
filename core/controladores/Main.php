<?php

namespace core\controladores;

use core\classes\Database;
use core\classes\App_geral
;





class Main{

    // ======================================================================

    public function index(){
        $db = new Database;
        $cliente = $db->select('SELECT * FROM clientes');

        $dados =[
            'titulo' => 'PHPSTORE/INDEX',
            'clientes' => $cliente
        ];
      
            App_geral::Layouts([
            'layouts/html_header',
            'inicio',
            'layouts/html_footer',
        ], $dados); 
    }
    // ======================================================================
    public function loja(){
        echo 'Loja!!!!!!!!!!';
    }
}