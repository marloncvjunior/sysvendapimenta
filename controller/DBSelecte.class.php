<?php

if (file_exists(dirname(__FILE__) . "/DBConneccao.class.php")) {
    require_once (dirname(__FILE__) . "/DBConneccao.class.php");
} else {
    die("não achou");
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Select
 *
 * @author 2898807
 */
class Selecte {

    private $Tabela;
    private $Sql;
    private $Conn;

    public function exeQuery($tabela) {
        $this->Tabela = $tabela;
        $this->Sql = "Select * from {$this->Tabela}";
        $array = $this->prepareExec();
        //print_r($array);
        return $array->FetchAll();
    }
      public function exeQueryCampo($tabela, $codigo,$campo) {
        $this->Tabela = $tabela;
        $this->Sql = "Select * from {$this->Tabela} where {$campo} =" . $codigo;
        $array = $this->prepareExec();
        //print_r($array);
        return $array->FetchAll(PDO::FETCH_ASSOC);
    }

    public function exeQueryCod($tabela, $codigo) {
        $this->Tabela = $tabela;
        $this->Sql = "Select * from {$this->Tabela} where codigo =" . $codigo;
        $array = $this->prepareExec();
        //print_r($array);
        return $array->FetchAll();
    }

    public function exeQueryJoinListAllPedido($codcar) {
        $this->Sql = "select carrinho.codigo, cliente.codigo, produto.descricao,sum(itemcarrinho.quantidade) as quantidade,itemcarrinho.produto, produto.preco,produto.imagem from
                      carrinho inner  join itemcarrinho on carrinho.codigo = itemcarrinho.carrinho
                      inner join cliente on cliente.codigo = carrinho.cliente 
                      inner join produto on produto.codigo = itemcarrinho.produto
                      where carrinho.codigo = {$codcar} group by produto.codigo";
         $array = $this->prepareExec();
        //print_r($array);
        return $array->FetchAll();
       
    }

    private function prepareExec() {
        $this->Conn = new Conneccao();
        $con = $this->Conn->conectar();
        //print_r($con);
        $stmt = $con->prepare($this->Sql);
        $stmt->execute();
        return $stmt;
        
        
    }

}
