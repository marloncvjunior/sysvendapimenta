<?php
require(dirname(__FILE__). "/db/Select.class.php");

class BeanShopping {
    public function __construct() {
       //$this->listaProdutos();
    }
    public function listaProdutos($param = null){
       $listaproduto = new Select();
       $produtos = $listaproduto->exeQuery("produto");
       //print_r($produtos);
       return (Object) $produtos;
       
       
      //echo "Urrull";
    }
}
