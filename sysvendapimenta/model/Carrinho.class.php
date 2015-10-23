<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carrinho
 *
 * @author 2898807
 */
class Carrinho {
    private $Codigo;
    private $Cliente;
    private $Produto;
    
    
    
    
    function getCodigo() {
        return $this->Codigo;
    }

    function getCliente() {
        return $this->Cliente;
    }

    function getProduto() {
        return $this->Produto;
    }

    function setCodigo($Codigo) {
        $this->Codigo = $Codigo;
    }

    function setCliente($Cliente) {
        $this->Cliente = $Cliente;
    }

    function setProduto($Produto) {
        $this->Produto = $Produto;
    }


}
