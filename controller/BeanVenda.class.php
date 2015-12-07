<?php
require_once dirname(__FILE__).'/DBSelecte.class.php';
require_once dirname(__FILE__).'/DBInsert.class.php';
class BeanVenda {
  
    
    public function listaItemCarrinho($codcar){
        
        $select = new Selecte();
        $pedido = $select->exeQueryJoinListAllPedido($codcar);
        return $pedido;
        
    }
    public function gravarIntensVenda($codcar){
        
    }
    public function gravarVenda($venda){
        $select = new Selecte();
        print_r($venda);
        $itens = $select->exeQueryCampo('itemcarrinho', $venda['carrinho'], 'carrinho');
        print_r($itens);
        foreach ($itens as $key => $value) {
           
        }
        $gravar = new Insert();
        $gravar->exeInsert('venda', $venda);
        $gravar->exeInsertMultiplos('itemvenda', $itens);
        $ultimo = $gravar->selectUltimoCod('venda','codigo');
       
    }
}
