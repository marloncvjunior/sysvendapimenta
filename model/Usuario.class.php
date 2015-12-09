<?php

class Usuario {
    
   private $codigo;
   private $nome;
   private $login;
   private $senha;
   
   


public function getCodigo() {
    return $this->codigo;
}

public  function getNome() {
    return $this->nome;
}

 function getLogin() {
    return $this->login;
}

 function getSenha() {
    return $this->senha;
}

 function setCodigo($codigo) {
    $this->codigo = $codigo;
}

 function setNome($nome) {
    $this->nome = $nome;
}

 function setLogin($login) {
    $this->login = $login;
}

 function setSenha($senha) {
    $this->senha = $senha;
}


}