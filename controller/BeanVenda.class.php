<?php
require_once dirname(__FILE__).'/DBSelecte.class.php';
require_once dirname(__FILE__).'/DBInsert.class.php';
require_once dirname(__FILE__).'/DBUpdate.class.php';
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
        $gravar = new Insert();
        $update = new DBUpdate();
        //print_r($venda);
        $gravar->exeInsert('venda', $venda);
        $itens = $select->exeQueryCampo('itemcarrinho', $venda['carrinho'], 'carrinho');
        //print_r($itens);
        $ultimo = $gravar->selectUltimoCod('venda','codigo');
        foreach ($itens as $key => $value) {
         
            $value['venda'] = $ultimo;
            unset($value['carrinho']);
              // print_r($value);
           // echo "<Br>";
            $gravar->exeInsert('itemvenda', $value);
            $estoque = $select->exeQueryEstoque($value['produto']);
            //print_r($estoque);
            $update->exeQueryEstoque($value['produto'],($estoque['estoque'] - $value['quantidade']));
        }
        
        
         unset($_SESSION['codcarrinho']);
         //print_r($itens);
        echo "<script>alert('Venda Realizada com sucesso !!!!');</script>";
        echo "<script>location.href = 'main.php';</script>";
       
        
        
      //  $gravar->exeInsertMultiplos('itemvenda', $itens);
        
       
    }
}
