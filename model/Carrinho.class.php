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
    private $codigo;
    private $cliente;
    private $item ;
    
    
    
    public function __construct() {
       ;
    }
    
    
    function getCodigo() {
        return $this->codigo;
    }

    function getCliente() {
        return $this->cliente;
    }
    function setCliente($cliente){
        $this->cliente = $cliente;
    }
    function getItem() {
        return $this->item;
    }

    function setItem($item) {
        $this->item[] = $item;
    }

        function getValorToral(){
        
        return $ValorTotal;
    }


}
