<?php


namespace  core\classes;

use Exception;
use PDO;
use PDOException;

class Database{
    
    private $ligacao;
    // ======================================================================
    private function ligar(){
        //conexao a bd pdo
        $this->ligacao = new PDO(
            'mysql:'. 
            'host ='. MYSQL_SERVER.';'.
            'dbname='. MYSQL_DATABASE,
             MYSQL_USER,
             MYSQL_PASS,array(PDO::ATTR_PERSISTENT => true)

            );

            //debug
            $this->ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    }
    // ======================================================================
    private function desligar() {
    // desligar da BD
        $this->ligacao=null;
    }

    // ======================================================================
    //CRUD    
    // ======================================================================
    public function select($sql, $parametro =null){
        

       //verificar se é um SELECT
       if (!preg_match("/^SELECT/i",$sql)) {
                throw new Exception('Base de dados - Não é uma instrução SELECT ') ;
       }
        // ligar
        $this->ligar();
       $resul = null;
        try{
            //comunicar com bd
            if (!empty($parametro)) {
               $executar = $this->ligacao->prepare($sql);     
               $executar->execute($parametro);
               $resul = $executar->fetchAll(PDO::FETCH_CLASS); 
            }else{
                $executar = $this->ligacao->prepare($sql);     
                $executar->execute();
                $resul = $executar->fetchAll(PDO::FETCH_CLASS); 
            
            } 
                 
        }catch(PDOException $e){
            // caso existe erro
            return false; 
        }
        
        //desligar da bd
        $this->desligar();

        //devolver valor
        return $resul; 


    }


    // ======================================================================
    public function insert($sql, $parametro =null){
                //verificar se é um INSERT
        if (!preg_match("/^INSERT/i",$sql)) {
                 throw new Exception('Base de dados - Não é uma instrução INSERT ') ;
        }
 
         //  ligar
         $this->ligar();
        
         try{
             //comunicar com bd
             if (!empty($parametro)) {
                $executar = $this->ligacao->prepare($sql);     
                $executar->execute($parametro);
            }else{
                 $executar = $this->ligacao->prepare($sql);     
                 $executar->execute();
            } 
                  
         }catch(PDOException $e){
             // caso existe erro
             return false; 
         }
         
         //desligar da bd
         $this->desligar();

 
 
     }
 
    // ======================================================================
    public function update($sql, $parametro =null){

        //verificar se é um UPDATE
        if (!preg_match("/^UPDATE/i",$sql)) {
                 throw new Exception('Base de dados - Não é uma instrução UPDATE ') ;
        }
 
         //  ligar
         $this->ligar();
        
         try{
             //comunicar com bd
             if (!empty($parametro)) {
                $executar = $this->ligacao->prepare($sql);     
                $executar->execute($parametro);
            }else{
                 $executar = $this->ligacao->prepare($sql);     
                 $executar->execute();
            } 
                  
         }catch(PDOException $e){
             // caso existe erro
             return false; 
         }
         
         //desligar da bd
         $this->desligar();

 
 
     }
     
    // ======================================================================
    public function delete($sql, $parametro =null){

        //verificar se é um DELETE
        if (!preg_match("/^DELETE/i",$sql)) {
                 throw new Exception('Base de dados - Não é uma instrução DELETE ') ;
        }
 
         //  ligar
         $this->ligar();
        
         try{
             //comunicar com bd
             if (!empty($parametro)) {
                $executar = $this->ligacao->prepare($sql);     
                $executar->execute($parametro);
            }else{
                 $executar = $this->ligacao->prepare($sql);     
                 $executar->execute();
            } 
                  
         }catch(PDOException $e){
             // caso existe erro
             return false; 
         }
         
         //desligar da bd
         $this->desligar();

 
 
     }
     
    // ======================================================================   
    //GENERICA     
    // ======================================================================
    public function statement($sql, $parametro =null){

        //verificar se é um sql dos anteriores  
        if (preg_match("/^(SELECT|INSERT|UPDATE|DELETE)/i",$sql)) {
                 throw new Exception('Base de dados - Instrução invalida ') ;
        }
 
         //  ligar
         $this->ligar();
        
         try{
             //comunicar com bd
             if (!empty($parametro)) {
                $executar = $this->ligacao->prepare($sql);     
                $executar->execute($parametro);
            }else{
                 $executar = $this->ligacao->prepare($sql);     
                 $executar->execute();
            } 
                  
         }catch(PDOException $e){
             // caso existe erro
             return false; 
         }
         
         //desligar da bd
         $this->desligar();

 
 
     }

 }




 

/* Crud da BD
        -CREATE -INSERT
        -READ   -SELECT
        -UPDATE -UPDATE
        -DELETE -DELETE




*/