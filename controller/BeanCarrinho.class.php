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
        if (isset($_SESSION['usuario'])) {
            $cliente = $_SESSION['usuario'];
        }else{
           session_start(); 
            $cliente = '';
        }
        //
        
        $this->carrinho = new Carrinho($cliente);
        
    }

    public function add($codigo = null) {
        if (isset($codigo['codproducar']) && isset($codigo['quant'])) {
            echo 'carregou carrinho';
            $quant = $codigo['quant'];
            $cod = $codigo['codproducar'];
            $_SESSION['carrinho'][$cod] = $quant;
            print_r($codigo);
            print_r($_SESSION['carrinho']);
           /* $produto = new Produto();

            $select = new Select();
            $retorno = $select->exeQueryCod('produto', $cod);
            //print_r(($retorno));
            $produto->arrayToProduct($retorno);
            //print_r($this->carrinho);
            $this->carrinho->addProduto($produto, $quant);
            $_SESSION['carrinho'][$cod] = $this->carrinho;*/
            
        } else {
            echo 'nao carregou carrinho';
        }
    }

    public static function rm($codigo = null) {
        
    }

}
