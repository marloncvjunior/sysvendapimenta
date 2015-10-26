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
    public $Produtos = array();
    public $Quantidade = array();
    
    
    public function __construct($Cliente) {
        $this->Cliente = $Cliente;
    }
    
    
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

    function addProduto($Produto,$quant) {
        
        array_push($this->Produtos,$Produto);
        array_push($this->Quantidade,$quant);
    }
    function getValorToral(){
        $ValorTotal = 0;
        for ($i = 0; $i< count($this->Produtos); $i++){
            $ValorTotal += $this->Quantidade[$i] * $this->Produtos[$i];
        }
        return $ValorTotal;
    }


}
