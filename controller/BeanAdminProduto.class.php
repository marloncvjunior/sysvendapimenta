<?php
require_once dirname(__DIR__).'/controller/DBSelecte.class.php';
require_once dirname(__DIR__) . '/controller/DBInsert.class.php';
require_once dirname(__DIR__) . '/controller/DBUpdate.class.php';

class BeanAdminProduto {
    
    public function listarProdutos(){
        $select = new Selecte();
        $listaprodutos = $select->exeQuery('produto');
        return ($listaprodutos);
    }
    public function alterar($dados){
        $atualizar = new DBUpdate();
        $atualizar->exeQuery('produto', $dados);
        
    }
    public function inserir($dados){
        $inserir = new Insert();
        $inserir->exeInsert('produto', $dados);
    }
}
