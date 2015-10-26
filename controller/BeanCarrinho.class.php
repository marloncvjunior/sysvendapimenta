<?php

//require(dirname(__DIR__) . "..\model\Cliente.class.php");
require(dirname(__DIR__) . "..\model\Carrinho.class.php");
require(dirname(__DIR__) . "..\model\Produto.class.php");

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BenCarrinho
 *
 * @author will
 */
class BeanCarrinho {

    private $carrinho;

    public function __construct() {
        session_start();
        $cliente = $_SESSION['usuario'];
        $this->carrinho = new Carrinho($cliente);
        $_SESSION['carrinho'] = $this->carrinho;
    }

    public function add($codigo = null) {
        if (isset($codigo['codproducar']) && isset($codigo['quant'])) {
            echo 'carregou carrinho';
            $quant = $codigo['quant'];
            $produto = new Produto();

            $select = new Select();
            $retorno = $select->exeQueryCod('produto', $codigo['codproducar']);
            //print_r(($retorno));
            $produto->arrayToProduct($retorno);
            print_r($this->carrinho);
            $this->carrinho->addProduto($produto, $quant);
            $_SESSION['carrinho'] = $this->carrinho;
        } else {
            echo 'nao carregou carrinho';
        }
    }

    public static function rm($codigo = null) {
        
    }

}
