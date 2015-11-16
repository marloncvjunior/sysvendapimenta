<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto
 *
 * @author 2898807
 */
class Produto {
    public $codigo;
    public $descricao;
    public $estoque;
    public $preco;
    public $imagem;
    
    function getCodigo() {
        return $this->codigo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getEstoque() {
        return $this->estoque;
    }

    function getPreco() {
        return $this->preco;
    }

    function getImagem() {
        return $this->imagem;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }
    function arrayToProduct($array){
        foreach ($array as $key => $value) {
            $this->codigo =   $value['codigo'];
            $this->descricao = $value['descricao'];
            $this->estoque = $value['estoque'];
            $this->preco = $value['preco'];
            $this->imagem = $value['imagem'];
        }
        
    }

    
    
}
