<?php
require_once(dirname(__FILE__). "/DBSelecte.class.php");

class BeanShopping {
    public function __construct() {
       //$this->listaProdutos();
    }
    public function listaProdutos($param = null){
       $listaproduto = new Selecte();
       $produtos = $listaproduto->exeQuery("produto");
       //print_r($produtos);
       return (Object) $produtos;
       
       
      //echo "Urrull";
    }
}
