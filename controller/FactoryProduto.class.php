<?php
require_once dirname(__DIR__).'/model/Produto.class.php';
require_once dirname(__FILE__).'/DBSelecte.class.php';
class FactoryProduto {
    public function __construct() {
        ;
    }
    public static function createProduto($codigo){
        $produto = new Produto();
        $select = new Select();
        $array = $select->exeQueryCod('produto', $codigo);
        $produto->arrayToProduct($array);
        return $produto;
    }
    
}
