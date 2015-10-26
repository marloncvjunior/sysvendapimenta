<?php
require (dirname(__FILE__). "/Connection.class.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Select
 *
 * @author 2898807
 */
class Select {
    private $Tabela;
    private $Sql;
    private $Conn;
    
    public function exeQuery($tabela){
        $this->Tabela = $tabela;
        $this->Sql= "Select * from {$this->Tabela}";
        $array = $this->prepareExec();
        //print_r($array);
        return $array;
    }
    public function exeQueryCod($tabela,$codigo){
        $this->Tabela = $tabela;
        $this->Sql= "Select * from {$this->Tabela} where codigo =".$codigo;
        $array = $this->prepareExec();
        //print_r($array);
        return $array;
    }
    
    private function prepareExec(){
        $this->Conn = new Connection();
        $con = $this->Conn->conectar();
        //print_r($con);
        $stmt = $con->prepare($this->Sql);
        $stmt->execute();
        return $stmt->FetchAll();
        
    }
}
