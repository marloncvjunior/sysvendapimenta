<?php
require_once dirname(__DIR__) .'/model/Carrinho.class.php';
require_once dirname(__FILE__) .'/BeanCliente.class.php';

class Insert {
    private $Tabela;
    private $Dados;
    private $Conn;
    private $Sql;
    
    function __construct() {
        $this->Conn = new Conneccao();
    }


    public function exeInsert($tabela,$Dados){
        $this->Dados = (array) $Dados;
        $this->Tabela = (String) $tabela; 
        print_r($this->Dados);
        $this->GerSql();
    }
      
    private function saveItem() {
        
    }
    
    public function saveCarrinho(){
        $cliente = BeanCliente::getClienteLogado();
        print_r($cliente);
        //print_r($cliente);
        $this->Sql = "INSERT INTO carrinho (codigo,cliente) VALUES (null,".$cliente->getCodigo() ."  );";
        $con = $this->Conn->conectar();
        //print_r($con);
        $stmt = $con->prepare($this->Sql);
        $stmt->execute();
        $stmt = $con->prepare("SELECT MAX(codigo) FROM carrinho");
        $stmt->execute();
        $retorno = null;
        foreach ( $stmt->Fetch() as $value) {
            $retorno = $value;
        }
      
       return $retorno;
        
        
    }public function saveItemCar($codcarrinho, $Dados){
        $sql = null;
        $sql = "INSERT INTO itemcarrinho (codigo,carrinho, quantidade, produto) VALUES ";
        print_r($Dados);
    foreach ($Dados as $key => $value) {
        $sql .="(NULL,".$codcarrinho .",".$value.",".$key."),";
       
    }
     $con = $this->Conn->conectar();
    $sql = substr($sql,0,-1);
    $stmt = $con->prepare($sql);
    
    return $stmt->execute();
        
        
    }

    private function GerSql(){
        $Fileds = implode(',', array_keys($this->Dados));
        //$Places =':'. implode(', :', array_keys($this->Dados));
        $Places =':'. implode(', :', array_keys($this->Dados));
        $this->Sql = "INSERT INTO {$this->Tabela} ({$Fileds}) VALUES ({$Places});";
        
        echo $this->Sql;
        $this->prepareExec();
    }
     private function prepareExec(){
        $con = $this->Conn->conectar();
        //print_r($con);
        $stmt = $con->prepare($this->Sql);
        $stmt->execute($this->Dados);
             
    }
}
