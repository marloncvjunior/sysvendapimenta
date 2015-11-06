<?php
require_once dirname(__DIR__).'/model/Produto.class.php';

class FactoryProduto {
    public function __construct() {
        ;
    }
    public static function createProduto($codigo){
        $produto = new Produto();
        $select = new Selecte();
        $array = $select->exeQueryCod('produto', $codigo);
        $produto->arrayToProduct($array);
        return $produto;
    }
    
}
