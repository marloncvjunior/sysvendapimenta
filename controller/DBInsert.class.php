<?php

class Insert {
    private $Tabela;
    private $Dados;
    private $Conn;
    
    public function exeInsert($tabela, array $Dados){
        $this->Dados =  $Dados;
        $this->Tabela = (String) $tabela; 
    }

    private function GerSql(){
        $Fileds = implode(',', array_keys($this->dados));
        $Places =':'. implode(', :', array_keys($this->dados));
        $sql = "INSERT INTO {$this->Tabela} ({$Fileds}) VALUES ({$Places});";
        echo $sql;
    }
}
