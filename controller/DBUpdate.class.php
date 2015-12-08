<?php

if (file_exists(dirname(__FILE__) . "/DBConneccao.class.php")) {
    require_once (dirname(__FILE__) . "/DBConneccao.class.php");
} else {
    die("não achou");
}

class DBUpdate {
    
    private $Tabela;
    private $Dados;
    private $Conn;
    private $Sql;
    
    
    public function exeQuery($tabela,$value){
      
         $this->Sql = "Update {$tabela} set descricao = '{$value['descricao']}',preco = {$value['preco']},estoque = {$value['estoque']} where codigo = {$value['codigo']}";  
      echo $this->Sql;
       $stmt = $this->prepareExec();
       return $stmt->FetchAll();
    }
    
    private function prepareExec(){
        $this->Conn = new Conneccao();
        $con = $this->Conn->conectar();
        //print_r($con);
        $stmt = $con->prepare($this->Sql);
        $stmt->execute();
        return $stmt;
             
    }
}
