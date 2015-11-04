<?php
require dirname(__FILE__).'../../model/Produto.class.php';
require dirname(__FILE__).'../db/Select.class.php';
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
