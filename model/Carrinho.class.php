<?php
require_once dirname(__FILE__). '/Cliente.class.php';
require_once dirname(__FILE__) .'/ItemCarrinho.class.php';

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
    public $codigo;
    public $cliente;
    public $item ;
    
    
    
    public function __construct() {
       ;
    }
    function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    
    function getCodigo() {
        return $this->codigo;
    }

    function getCliente() {
        return ($this->cliente);
    }
    function setCliente(Cliente $cliente){
        $this->cliente = ($cliente);
    }
    function getItem() {
        return ($this->item);
    }

    function setItem($item) {
        $this->item = ($item);
    }

        function getValorToral(){
        
        return $ValorTotal;
    }


}
