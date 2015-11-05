<?php
require_once dirname(__DIR__).'/model/ItemCarrinho.class.php';
require_once dirname(__FILE__).'/FactoryProduto.class.php';
require_once dirname(__DIR__) .'/model/Produto.class.php';

class FactoryItemCarrinho {
    public static function createItemCarrinhoArray($array){
        foreach ($array as $value) {
            print_r($value);
            echo "_____";
         print_r(array_values($array));
        }
    }
    public static function createItemCarrinho(){
        return new ItemCarrinho();
    }
     public static function createItemCarrinhoQueryBD($codigo){
         $item = $this->createItemCarrinho();
         $item->setProduto($produto);
         $item->setQuantidade($quantidade);
         
         
        return  $item;
    }
}
