<?php


class DBDelete {
    
    private $Sql;
    
   function __construct() {
       ;
   }
   
   public function exeQuery($codigo,$tabela,$coluna){
       $this->Sql = "delete from {$tabela} where {$coluna} = {$codigo}";
       return $this->prepareExec();
       
       
   }
    public function exeQueryCarrinho($produto,$carrinho){
       $this->Sql = "delete from itemcarrinho where produto = {$produto} and carrinho={$carrinho}";
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
