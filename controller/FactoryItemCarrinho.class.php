<?php
require_once dirname(__DIR__).'/model/ItemCarrinho.class.php';
require_once dirname(__FILE__).'/FactoryProduto.class.php';
require_once dirname(__DIR__) .'/model/Produto.class.php';

class FactoryItemCarrinho {
    public function createItemCarrinhoArray($array){
        $vetor = array() ;
        foreach ($array as $key => $value) {
            //print_r($value);
            //echo "--";
            //print_r($key);
            //echo "--";
            
        $vetor[] = $this->createItemCarrinhoQueryBD($key, $value);
            
        }
        return $vetor;
    }
    private function createItemCarrinho(){
        return new ItemCarrinho();
    }
     private function createItemCarrinhoQueryBD($codigo,$quant){
          //echo "<script>alert('Foi');</script>";
         $item =  new ItemCarrinho();
         $item->setProduto(FactoryProduto::createProduto($codigo));
         $item->setQuantidade($quant);
         //print_r($item);
         
        return  $item;
    }
}
