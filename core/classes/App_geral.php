<?php

namespace  core\classes;

use Exception;

class App_geral {

    // ======================================================================
    public static function Layouts($estruturas,$dados=null) {
        
        //Verificar se estruturas e um array 
        if (!is_array($estruturas)) {
            throw new Exception("Coleção de estruturas inválida ");         
        }

        //variaveis 
        
        if (!empty($dados) && is_array($dados)) {
            extract($dados);
        }

        //apresentar views
        
        foreach ($estruturas as $estrutura) {
          include("../core/views/$estrutura.php");
        }
    }

    // ======================================================================
    public static function ClienteLogado(){

        // verifica se cliente esta logado
        return isset($_SESSION['cliente']);
    }

}