<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author will
 */
class Cliente {
    
    public $codigo;
    public $nome;
    public $senha;
    public $email;
    private $codcadnac;
    private $codcadest;
    private $endereco;
    
    
    function getCodCadNac(){
        return $this->codcadnac;
    }
    function setCodCadNac($codcadnac){
       $this->codcadnac = $codcadnac;
    }
    function getCodCadEac(){
        return $this->codcadest;
    }
    function setCodCadEst($codcadest){
       $this->codcadest = $codcadest;
    }
    function getEndereco(){
        return $this->endereco;
    }
    function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    function getCodigo() {
        return $this->codigo;
    }

    function setCodigo($codigo) {
        $this->codigo =(int) $codigo;
    }

        
    function getNome() {
        return $this->nome;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setEmail($email) {
        $this->email = $email;
    }


}
