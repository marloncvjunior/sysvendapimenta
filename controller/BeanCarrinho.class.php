<?php
//require(dirname(__DIR__) . "..\model\Cliente.class.php");
require(dirname(__DIR__) . "..\model\Carrinho.class.php");

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
    public static function create(){
        $cliente = $_SESSION['usuario'];
        $carrinho = new Carrinho($cliente);
        $carrinho->addProduto($Produto, $quant)
        
        ;
    }
}
