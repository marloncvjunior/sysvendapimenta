<?php


class DBDelete {
    
    private $Sql;
    
   function __construct() {
       ;
   }
   
   public function exeQuery($codigo,$tabela){
       $this->Sql = "delete from {$tabela} where codigo = {$codigo}";
       return $this->prepareExec();
       
       
   }
   private function prepareExec(){
        $this->Conn = new Conneccao();
        $con = $this->Conn->conectar();
        //print_r($con);
        $stmt = $con->prepare($this->Sql);
        return $stmt->execute();
   }    
}
