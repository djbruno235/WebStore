<?php

namespace core\controladores;


use core\classes\App_geral
;




class Main{

    // ======================================================================
       public function index(){
 
 
        $dados =[
            'titulo' => APP_NAME. ' - ' . APP_VERSION,
         
        ];
      
            App_geral::Layouts([
            'layouts/html_header',
            'menu',
            'inicio',
            'rodape',
            'layouts/html_footer',
        ], $dados); 
    }
    // ======================================================================
    public function loja(){
        echo 'Loja!!!!!!!!!!';
    }
}