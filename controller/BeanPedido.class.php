<?php
require_once dirname(__FILE__).'/DBSelecte.class.php';


class BeanPedido {
    public function alteraCliente($codigo){
        
    }
   
    public function listarPedido($codcar) {
        $select = new Selecte();
        $pedido = $select->exeQueryJoinListAllPedido($codcar);
        // print_r($pedido);
        return $pedido;
       
        
        
    }
}
