<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemCarrinho
 *
 * @author 2898807
 */
class ItemCarrinho {
    public $codigo;
    public $quantidade;
    public $produto;
    
    public function __construct() {
        ;
    }
    
    function getCodigo() {
        return $this->codigo;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getProduto() {
        return ($this->produto);
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setProduto($produto) {
        $this->produto = $produto;
    }


}
